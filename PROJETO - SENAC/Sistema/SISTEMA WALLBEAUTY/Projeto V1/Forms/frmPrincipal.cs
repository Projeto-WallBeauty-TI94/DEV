using Projeto_V1.Properties;
using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Drawing;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Windows.Forms;

namespace Projeto_V1
{
    public partial class Principal : Form
    {
        private bool isCollapsed;
        private bool isCollapsed2;
        private bool isCollapsed3;
        private bool isCollapsed4;
        private Form activeForm;
        private Button currentButton;
        public Principal()
        {
            InitializeComponent();
            this.FormBorderStyle = FormBorderStyle.FixedSingle;
            this.MaximizeBox = false;
        }

        private void ActivateButton(object btnSender)
        {
            if (currentButton != (Button)btnSender)
            {
                currentButton = (Button)btnSender;
            }
        }


        private void OpenChildForm(Form childForm, object btnSender)
        {
            if (activeForm != null)
            {
                activeForm.Close();
            }
            ActivateButton(btnSender);
            activeForm = childForm;
            childForm.TopLevel = false;
            childForm.FormBorderStyle = FormBorderStyle.None;
            childForm.Dock = DockStyle.Fill;
            this.panelAgenda.Controls.Add(childForm);
            this.panelAgenda.Tag = childForm;
            childForm.BringToFront();
            childForm.Show();
        }
        private void CloseOtherDropdowns(int currentDropdown, bool isSameButton)
        {
            int alturaPainel = 86;
            int alturaPainel2 = 167;
            int alturaPainel3 = 167;
            int alturaPainel4 = 167;

            if (currentDropdown != 1 && (!isCollapsed || !isSameButton))
            {
                timerAgenda.Stop();
                isCollapsed = true;
                btAgenda.Image = Resources.Expand_Arrow_20px;
                panelDropDown.Height -= alturaPainel;
                panelDropDown2.Top = panelDropDown.Bottom;
                panelDropDown3.Top = panelDropDown2.Bottom;
                panelDropDown4.Top = panelDropDown3.Bottom;
            }

            if (currentDropdown != 2 && (!isCollapsed2 || !isSameButton))
            {
                timerFuncionarios.Stop();
                isCollapsed2 = true;
                btFuncionario.Image = Resources.Expand_Arrow_20px;
                panelDropDown2.Height -= alturaPainel2;
                panelDropDown3.Top = panelDropDown2.Bottom;
                panelDropDown4.Top = panelDropDown3.Bottom;
            }

            if (currentDropdown != 3 && (!isCollapsed3 || !isSameButton))
            {
                timerClientes.Stop();
                isCollapsed3 = true;
                btCliente.Image = Resources.Expand_Arrow_20px;
                panelDropDown3.Height -= alturaPainel3;
                panelDropDown4.Top = panelDropDown3.Bottom;
            }

            if (currentDropdown != 4 && (!isCollapsed4 || !isSameButton))
            {
                timerServicos.Stop();
                isCollapsed4 = true;
                btServicos.Image = Resources.Expand_Arrow_20px;
                panelDropDown4.Height -= alturaPainel4;
            }
        }

        private void timerRelogio_Tick_1(object sender, EventArgs e)
        {
            this.hora.Text = DateTime.Now.ToString("HH:mm:ss");
            this.data.Text = DateTime.Today.ToString("dd/MM/yyyy");
        }

        private void btAgenda_Click_1(object sender, EventArgs e)
        {
            CloseOtherDropdowns(1, true);
            timerAgenda.Start();
        }

        private void btFuncionario_Click_1(object sender, EventArgs e)
        {

            CloseOtherDropdowns(2, true);
            timerFuncionarios.Start();
        }

        private void btClientes_Click_1(object sender, EventArgs e)
        {
            CloseOtherDropdowns(3, true);
            timerClientes.Start();
        }

        private void btServicos_Click_1(object sender, EventArgs e)
        {
            CloseOtherDropdowns(4, true);
            timerServicos.Start();
        }

        private void timerAgenda_Tick_1(object sender, EventArgs e)
        {
            int incremento = 10;
            if (isCollapsed)
            {
                btAgenda.Image = Resources.Collapse_Arrow_20px;
                panelDropDown.Height += incremento;
                panelDropDown2.Top = panelDropDown.Bottom;
                panelDropDown3.Top = panelDropDown2.Bottom;
                panelDropDown4.Top = panelDropDown3.Bottom;
                if (panelDropDown.Size == panelDropDown.MaximumSize)
                {
                    timerAgenda.Stop();
                    isCollapsed = false;
                }
            }
            else
            {
                btAgenda.Image = Resources.Expand_Arrow_20px;
                panelDropDown.Height -= incremento;
                panelDropDown2.Top = panelDropDown.Bottom;
                panelDropDown3.Top = panelDropDown2.Bottom;
                panelDropDown4.Top = panelDropDown3.Bottom;
                if (panelDropDown.Size == panelDropDown.MinimumSize)
                {
                    timerAgenda.Stop();
                    isCollapsed = true;
                }
            }
        }
    

        private void timerFuncionarios_Tick_1(object sender, EventArgs e)
        {
            int incremento = 10;

            if (isCollapsed2)
            {
                btFuncionario.Image = Resources.Collapse_Arrow_20px;
                panelDropDown2.Height += incremento;
                panelDropDown3.Top = panelDropDown2.Bottom;
                panelDropDown4.Top = panelDropDown3.Bottom;
                if (panelDropDown2.Size == panelDropDown2.MaximumSize)
                {
                    timerFuncionarios.Stop();
                    isCollapsed2 = false;
                }
            }
            else
            {
                btFuncionario.Image = Resources.Expand_Arrow_20px;
                panelDropDown2.Height -= incremento;
                panelDropDown3.Top = panelDropDown2.Bottom;
                panelDropDown4.Top = panelDropDown3.Bottom;
                if (panelDropDown2.Size == panelDropDown2.MinimumSize)
                {
                    timerFuncionarios.Stop();
                    isCollapsed2 = true;
                }
            }
        }


        private void timerClientes_Tick_1(object sender, EventArgs e)
        {
            int incremento = 10;

            if (isCollapsed3)
            {
                btCliente.Image = Resources.Collapse_Arrow_20px;
                panelDropDown3.Height += incremento;
                panelDropDown4.Top = panelDropDown3.Bottom;
                if (panelDropDown3.Size == panelDropDown3.MaximumSize)
                {
                    timerClientes.Stop();
                    isCollapsed3 = false;
                }
            }
            else
            {
                btCliente.Image = Resources.Expand_Arrow_20px;
                panelDropDown3.Height -= incremento;
                panelDropDown4.Top = panelDropDown3.Bottom;
                if (panelDropDown3.Size == panelDropDown3.MinimumSize)
                {
                    timerClientes.Stop();
                    isCollapsed3 = true;
                }
            }
        }
        

        private void timerServicos_Tick_1(object sender, EventArgs e)
        {
            int incremento = 10;

            if (isCollapsed4)
            {
                btServicos.Image = Resources.Collapse_Arrow_20px;
                panelDropDown4.Height += incremento;
                if (panelDropDown4.Size == panelDropDown4.MaximumSize)
                {
                    timerServicos.Stop();
                    isCollapsed4 = false;
                }
            }
            else
            {
                btServicos.Image = Resources.Expand_Arrow_20px;
                panelDropDown4.Height -= incremento;
                if (panelDropDown4.Size == panelDropDown4.MinimumSize)
                {
                    timerServicos.Stop();
                    isCollapsed4 = true;
                }
            }
        }

        private void btAgendaConsulta_Click(object sender, EventArgs e)
        {
            OpenChildForm(new Forms.frmConsAgenda(), sender);
        }

        private void btAgendaAgendamento_Click(object sender, EventArgs e)
        {
            OpenChildForm(new Forms.frmAgendamento(), sender);
        }

        private void btFuncionarioEditar_Click(object sender, EventArgs e)
        {
            OpenChildForm(new Forms.frmEditarFunc(), sender);
        }

        private void btFuncionarioConsulta_Click(object sender, EventArgs e)
        {
            OpenChildForm(new Forms.frmConsFunc(), sender);
        }

        private void btClienteEditar_Click(object sender, EventArgs e)
        {
            OpenChildForm(new Forms.frmEditarCli(), sender);
        }

        private void btClienteConsulta_Click(object sender, EventArgs e)
        {
            OpenChildForm(new Forms.frmConsCli(), sender);
        }

        private void btServicoEditar_Click(object sender, EventArgs e)
        {
            OpenChildForm(new Forms.frmEditarServicos(), sender);
        }

        private void btServicoConsulta_Click(object sender, EventArgs e)
        {
            OpenChildForm(new Forms.frmConsServicos(), sender);
        }
    }
}
