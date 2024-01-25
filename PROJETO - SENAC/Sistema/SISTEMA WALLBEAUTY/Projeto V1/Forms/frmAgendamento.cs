using MySqlConnector;
using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Drawing;
using System.Globalization;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Windows.Forms;
using static System.Windows.Forms.VisualStyles.VisualStyleElement;

namespace Projeto_V1.Forms
{
    public partial class frmAgendamento : Form
    {
        banco bd = new banco();
        string sql;
        MySqlCommand cmd;
        string Id;

        public frmAgendamento()
        {
            InitializeComponent();
            busca();
            
        }



        private void busca()
        {
            bd.abrirConn();
            sql = "SELECT Agendamento.ID as ID, Cliente.NOME AS Cliente, Servico.NOME AS Serviço, Agendamento.DATA_AGENDAMENTO as Data, Agendamento.HORA_AGENDAMENTO as Hora, Funcionario.NOME AS Funcionario " +
                  "FROM agendamento " +
                  "INNER JOIN cliente ON Agendamento.FK_CLIENTE_ID = cliente.id " +
                  "INNER JOIN servico ON Agendamento.FK_SERVICO_ID = servico.id " +
                  "INNER JOIN funcionario ON Agendamento.FUNCIONARIO_ID = funcionario.id ";

            cmd = new MySqlCommand(sql, bd.conecta);
            MySqlDataAdapter da = new MySqlDataAdapter(cmd);
            da.SelectCommand = cmd;
            DataTable dataTable = new DataTable();
            da.Fill(dataTable);
            dataGridView1.DataSource = dataTable;
        }

        private void FillCliente()
        {
            bd.abrirConn();
            sql = "select nome from cliente";
            cmd = new MySqlCommand(sql, bd.conecta);

            MySqlDataAdapter da = new MySqlDataAdapter();
            da.SelectCommand = cmd;
            DataTable dt = new DataTable();
            da.Fill(dt);
            {
                cbCliente.DataSource = dt;
                cbCliente.DisplayMember = "nome";
            }

        }


        private void FillFuncionario()
        {
            bd.abrirConn();
            sql = "select nome from funcionario";
            cmd = new MySqlCommand(sql, bd.conecta);

            MySqlDataAdapter da = new MySqlDataAdapter();
            da.SelectCommand = cmd;
            DataTable dt = new DataTable();
            da.Fill(dt);
            {
                cbFunc.DataSource = dt;
                cbFunc.DisplayMember = "nome";
            }

        }
        private void FillServico()
        {
            bd.abrirConn();
            sql = "select nome from servico";
            cmd = new MySqlCommand(sql, bd.conecta);

            MySqlDataAdapter da = new MySqlDataAdapter();
            da.SelectCommand = cmd;
            DataTable dt = new DataTable();
            da.Fill(dt);
            {
                cbServico.DataSource = dt;
                cbServico.DisplayMember = "nome";
            }
        }

        private void btnUpdate_Click_1(object sender, EventArgs e)
        {
            DialogResult dialogResult = MessageBox.Show("Tem certeza que deseja alterar os dados?", "Dados atualizados!", MessageBoxButtons.YesNo);

            if (dialogResult == DialogResult.Yes)
            {
                bd.abrirConn();

                sql = @"UPDATE agendamento
        SET agendamento.FUNCIONARIO_ID = (SELECT f.ID FROM funcionario f WHERE f.nome = @Func),
            agendamento.FK_CLIENTE_ID = (SELECT c.ID FROM cliente c WHERE c.nome = @Cliente),
            agendamento.FK_SERVICO_ID = (SELECT s.ID FROM servico s WHERE s.nome = @Serv),
            agendamento.DATA_AGENDAMENTO = @DataAgenda,
            agendamento.HORA_AGENDAMENTO = @HoraAgenda
        WHERE agendamento.ID = @Id";

                cmd = new MySqlCommand(sql, bd.conecta);
                cmd.Parameters.AddWithValue("@Func", cbFunc.Text);
                cmd.Parameters.AddWithValue("@Cliente", cbCliente.Text);
                cmd.Parameters.AddWithValue("@Serv", cbServico.Text);
                cmd.Parameters.AddWithValue("@DataAgenda", dtAgendamento.Value);
                cmd.Parameters.AddWithValue("@HoraAgenda", dtHora.Value);
                cmd.Parameters.AddWithValue("@Id", textBox1.Text);

                cmd.ExecuteNonQuery();

                busca();




            }
        }

        private void btnSelect_Click_1(object sender, EventArgs e)
        {
            bd.abrirConn();
            sql = "SELECT Agendamento.Id as ID, Cliente.NOME AS Cliente, Servico.NOME AS Servico, Agendamento.DATA_AGENDAMENTO as Data, Agendamento.HORA_AGENDAMENTO as Hora, Funcionario.NOME AS Funcionario " +
                  "FROM agendamento " +
                  "INNER JOIN cliente ON Agendamento.FK_CLIENTE_ID = cliente.id " +
                  "INNER JOIN servico ON Agendamento.FK_SERVICO_ID = servico.id " +
                  "INNER JOIN funcionario ON Agendamento.FUNCIONARIO_ID = funcionario.id " +
                  "WHERE Agendamento.DATA_AGENDAMENTO = @DataAgenda";

            cmd = new MySqlCommand(sql, bd.conecta);
            cmd.Parameters.AddWithValue("@DataAgenda", dtBusca.Value);
            MySqlDataAdapter da = new MySqlDataAdapter(cmd);
            da.SelectCommand = cmd;
            DataTable dataTable = new DataTable();
            da.Fill(dataTable);
            dataGridView1.DataSource = dataTable;
        }

        private void btnInsert_Click_1(object sender, EventArgs e)
        {
            bd.abrirConn();

            sql = @"INSERT INTO `agendamento`(`FUNCIONARIO_ID`, `FK_CLIENTE_ID`, `FK_SERVICO_ID`, `DATA_AGENDAMENTO`, `HORA_AGENDAMENTO`) 
         SELECT f.ID AS FUNCIONARIO_ID, c.ID AS FK_CLIENTE_ID, s.ID AS FK_SERVICO_ID, @DataAgenda, @HoraAgenda
         FROM funcionario f
         INNER JOIN cliente c ON f.nome = @Func
         INNER JOIN servico s ON s.nome = @Serv";

            cmd = new MySqlCommand(sql, bd.conecta);
            cmd.Parameters.AddWithValue("@Func", cbFunc.Text);
            cmd.Parameters.AddWithValue("@Serv", cbServico.Text);
            cmd.Parameters.AddWithValue("@DataAgenda", dtAgendamento.Value);
            cmd.Parameters.AddWithValue("@HoraAgenda", dtHora.Value);

            cmd.ExecuteNonQuery();
            MessageBox.Show("Agendamento adicionado com sucesso!");
            busca();
        }

        private void btnDelete_Click_1(object sender, EventArgs e)
        {
            DialogResult dialogResult = MessageBox.Show("Tem certeza que deseja excluir os dados ?", "Dados excluídos!", MessageBoxButtons.YesNo);

            if (dialogResult == DialogResult.Yes)
            {
                bd.abrirConn();
                sql = "Delete from agendamento where id=@id";
                cmd = new MySqlCommand(sql, bd.conecta);
                cmd.Parameters.AddWithValue("@id", textBox1.Text);
                cmd.ExecuteNonQuery();
                MessageBox.Show("Dados deletados!");
                busca();
            }
        }

        private void cbFunc_SelectedIndexChanged(object sender, EventArgs e)
        {

        }
    }
    }
    
    

