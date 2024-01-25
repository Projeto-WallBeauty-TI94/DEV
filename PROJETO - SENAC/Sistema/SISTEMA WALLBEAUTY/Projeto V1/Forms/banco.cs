using MySqlConnector;
using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace Projeto_V1.Forms
{
    internal class banco
    {
        string conexao = ("server=127.0.0.1;user=root;password=;database=db_projeto");
        public MySqlConnection conecta = null;

        public void abrirConn()
        {
            try
            {
                conecta = new MySqlConnection(conexao);
                conecta.Open();
            }
            catch (Exception ex)
            {

                throw ex;
            }
        }

        public void fecharConn()
        {
            try
            {
                conecta = new MySqlConnection(conexao);
                conecta.Close();
            }
            catch (Exception ex)
            {

                throw ex;
            }
        }
    }
}

