namespace Projeto_V1
{
    partial class Principal
    {
        /// <summary>
        /// Variável de designer necessária.
        /// </summary>
        private System.ComponentModel.IContainer components = null;

        /// <summary>
        /// Limpar os recursos que estão sendo usados.
        /// </summary>
        /// <param name="disposing">true se for necessário descartar os recursos gerenciados; caso contrário, false.</param>
        protected override void Dispose(bool disposing)
        {
            if (disposing && (components != null))
            {
                components.Dispose();
            }
            base.Dispose(disposing);
        }

        #region Código gerado pelo Windows Form Designer

        /// <summary>
        /// Método necessário para suporte ao Designer - não modifique 
        /// o conteúdo deste método com o editor de código.
        /// </summary>
        private void InitializeComponent()
        {
            this.components = new System.ComponentModel.Container();
            System.ComponentModel.ComponentResourceManager resources = new System.ComponentModel.ComponentResourceManager(typeof(Principal));
            this.panelLeftTop = new System.Windows.Forms.Panel();
            this.hora = new System.Windows.Forms.Label();
            this.data = new System.Windows.Forms.Label();
            this.relogioGif = new System.Windows.Forms.PictureBox();
            this.panelLeftModal = new System.Windows.Forms.Panel();
            this.panelDropDown = new System.Windows.Forms.Panel();
            this.btAgendaAgendamento = new System.Windows.Forms.Button();
            this.btAgendaConsulta = new System.Windows.Forms.Button();
            this.btAgenda = new System.Windows.Forms.Button();
            this.panelResumo = new System.Windows.Forms.Panel();
            this.saldo = new System.Windows.Forms.Label();
            this.numCancelados = new System.Windows.Forms.Label();
            this.numConcluidos = new System.Windows.Forms.Label();
            this.numAgendamentos = new System.Windows.Forms.Label();
            this.label5 = new System.Windows.Forms.Label();
            this.label4 = new System.Windows.Forms.Label();
            this.label1 = new System.Windows.Forms.Label();
            this.label3 = new System.Windows.Forms.Label();
            this.panelDropDown2 = new System.Windows.Forms.Panel();
            this.btFuncionarioEditar = new System.Windows.Forms.Button();
            this.btFuncionarioConsulta = new System.Windows.Forms.Button();
            this.btFuncionario = new System.Windows.Forms.Button();
            this.panelDropDown3 = new System.Windows.Forms.Panel();
            this.btClienteEditar = new System.Windows.Forms.Button();
            this.btClienteConsulta = new System.Windows.Forms.Button();
            this.btCliente = new System.Windows.Forms.Button();
            this.panelDropDown4 = new System.Windows.Forms.Panel();
            this.btServicoEditar = new System.Windows.Forms.Button();
            this.btServicoConsulta = new System.Windows.Forms.Button();
            this.btServicos = new System.Windows.Forms.Button();
            this.timerRelogio = new System.Windows.Forms.Timer(this.components);
            this.timerAgenda = new System.Windows.Forms.Timer(this.components);
            this.timerFuncionarios = new System.Windows.Forms.Timer(this.components);
            this.timerClientes = new System.Windows.Forms.Timer(this.components);
            this.timerServicos = new System.Windows.Forms.Timer(this.components);
            this.panelAgenda = new System.Windows.Forms.Panel();
            this.panelTop = new System.Windows.Forms.Panel();
            this.labelHoraLogin = new System.Windows.Forms.Label();
            this.label2 = new System.Windows.Forms.Label();
            this.labelUsuario = new System.Windows.Forms.Label();
            this.logoutButton = new System.Windows.Forms.ToolStrip();
            this.toolStripButton1 = new System.Windows.Forms.ToolStripButton();
            this.panelLeftTop.SuspendLayout();
            ((System.ComponentModel.ISupportInitialize)(this.relogioGif)).BeginInit();
            this.panelLeftModal.SuspendLayout();
            this.panelDropDown.SuspendLayout();
            this.panelResumo.SuspendLayout();
            this.panelDropDown2.SuspendLayout();
            this.panelDropDown3.SuspendLayout();
            this.panelDropDown4.SuspendLayout();
            this.panelTop.SuspendLayout();
            this.logoutButton.SuspendLayout();
            this.SuspendLayout();
            // 
            // panelLeftTop
            // 
            this.panelLeftTop.BackColor = System.Drawing.Color.FromArgb(((int)(((byte)(64)))), ((int)(((byte)(64)))), ((int)(((byte)(64)))));
            this.panelLeftTop.Controls.Add(this.hora);
            this.panelLeftTop.Controls.Add(this.data);
            this.panelLeftTop.Controls.Add(this.relogioGif);
            this.panelLeftTop.Location = new System.Drawing.Point(0, 0);
            this.panelLeftTop.Name = "panelLeftTop";
            this.panelLeftTop.Size = new System.Drawing.Size(202, 69);
            this.panelLeftTop.TabIndex = 1;
            // 
            // hora
            // 
            this.hora.AutoSize = true;
            this.hora.Font = new System.Drawing.Font("Lucida Fax", 14.25F, System.Drawing.FontStyle.Regular, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.hora.ForeColor = System.Drawing.SystemColors.ButtonHighlight;
            this.hora.Location = new System.Drawing.Point(70, 35);
            this.hora.Name = "hora";
            this.hora.Size = new System.Drawing.Size(57, 22);
            this.hora.TabIndex = 3;
            this.hora.Text = "Hora";
            // 
            // data
            // 
            this.data.AutoSize = true;
            this.data.Font = new System.Drawing.Font("Lucida Fax", 14.25F, System.Drawing.FontStyle.Regular, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.data.ForeColor = System.Drawing.SystemColors.ButtonHighlight;
            this.data.Location = new System.Drawing.Point(70, 13);
            this.data.Name = "data";
            this.data.Size = new System.Drawing.Size(55, 22);
            this.data.TabIndex = 3;
            this.data.Text = "Data";
            // 
            // relogioGif
            // 
            this.relogioGif.BackgroundImage = global::Projeto_V1.Properties.Resources.White_Clock;
            this.relogioGif.Image = global::Projeto_V1.Properties.Resources.White_Clock;
            this.relogioGif.Location = new System.Drawing.Point(11, 8);
            this.relogioGif.Name = "relogioGif";
            this.relogioGif.Size = new System.Drawing.Size(52, 54);
            this.relogioGif.SizeMode = System.Windows.Forms.PictureBoxSizeMode.StretchImage;
            this.relogioGif.TabIndex = 3;
            this.relogioGif.TabStop = false;
            // 
            // panelLeftModal
            // 
            this.panelLeftModal.Anchor = ((System.Windows.Forms.AnchorStyles)(((System.Windows.Forms.AnchorStyles.Top | System.Windows.Forms.AnchorStyles.Bottom) 
            | System.Windows.Forms.AnchorStyles.Left)));
            this.panelLeftModal.BackColor = System.Drawing.Color.Silver;
            this.panelLeftModal.Controls.Add(this.panelDropDown);
            this.panelLeftModal.Controls.Add(this.panelResumo);
            this.panelLeftModal.Controls.Add(this.panelDropDown2);
            this.panelLeftModal.Controls.Add(this.panelDropDown3);
            this.panelLeftModal.Controls.Add(this.panelDropDown4);
            this.panelLeftModal.Location = new System.Drawing.Point(0, 69);
            this.panelLeftModal.Name = "panelLeftModal";
            this.panelLeftModal.Size = new System.Drawing.Size(202, 659);
            this.panelLeftModal.TabIndex = 2;
            // 
            // panelDropDown
            // 
            this.panelDropDown.BackColor = System.Drawing.Color.Transparent;
            this.panelDropDown.Controls.Add(this.btAgendaAgendamento);
            this.panelDropDown.Controls.Add(this.btAgendaConsulta);
            this.panelDropDown.Controls.Add(this.btAgenda);
            this.panelDropDown.Location = new System.Drawing.Point(0, 0);
            this.panelDropDown.MaximumSize = new System.Drawing.Size(202, 142);
            this.panelDropDown.MinimumSize = new System.Drawing.Size(202, 60);
            this.panelDropDown.Name = "panelDropDown";
            this.panelDropDown.Size = new System.Drawing.Size(202, 60);
            this.panelDropDown.TabIndex = 11;
            // 
            // btAgendaAgendamento
            // 
            this.btAgendaAgendamento.BackColor = System.Drawing.Color.PaleTurquoise;
            this.btAgendaAgendamento.Dock = System.Windows.Forms.DockStyle.Top;
            this.btAgendaAgendamento.FlatAppearance.BorderSize = 0;
            this.btAgendaAgendamento.FlatStyle = System.Windows.Forms.FlatStyle.Flat;
            this.btAgendaAgendamento.Font = new System.Drawing.Font("Microsoft Sans Serif", 12F, System.Drawing.FontStyle.Regular, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.btAgendaAgendamento.Location = new System.Drawing.Point(0, 101);
            this.btAgendaAgendamento.Name = "btAgendaAgendamento";
            this.btAgendaAgendamento.Size = new System.Drawing.Size(202, 41);
            this.btAgendaAgendamento.TabIndex = 2;
            this.btAgendaAgendamento.Text = "Agendamento";
            this.btAgendaAgendamento.UseVisualStyleBackColor = false;
            this.btAgendaAgendamento.Click += new System.EventHandler(this.btAgendaAgendamento_Click);
            // 
            // btAgendaConsulta
            // 
            this.btAgendaConsulta.BackColor = System.Drawing.Color.PaleTurquoise;
            this.btAgendaConsulta.Dock = System.Windows.Forms.DockStyle.Top;
            this.btAgendaConsulta.FlatAppearance.BorderSize = 0;
            this.btAgendaConsulta.FlatStyle = System.Windows.Forms.FlatStyle.Flat;
            this.btAgendaConsulta.Font = new System.Drawing.Font("Microsoft Sans Serif", 12F, System.Drawing.FontStyle.Regular, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.btAgendaConsulta.Location = new System.Drawing.Point(0, 60);
            this.btAgendaConsulta.Name = "btAgendaConsulta";
            this.btAgendaConsulta.Size = new System.Drawing.Size(202, 41);
            this.btAgendaConsulta.TabIndex = 1;
            this.btAgendaConsulta.Text = "Consulta";
            this.btAgendaConsulta.UseVisualStyleBackColor = false;
            this.btAgendaConsulta.Click += new System.EventHandler(this.btAgendaConsulta_Click);
            // 
            // btAgenda
            // 
            this.btAgenda.BackColor = System.Drawing.Color.Turquoise;
            this.btAgenda.Dock = System.Windows.Forms.DockStyle.Top;
            this.btAgenda.FlatAppearance.BorderSize = 0;
            this.btAgenda.FlatStyle = System.Windows.Forms.FlatStyle.Flat;
            this.btAgenda.Font = new System.Drawing.Font("Microsoft Sans Serif", 14.25F, System.Drawing.FontStyle.Regular, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.btAgenda.Image = global::Projeto_V1.Properties.Resources.Expand_Arrow_20px;
            this.btAgenda.Location = new System.Drawing.Point(0, 0);
            this.btAgenda.MaximumSize = new System.Drawing.Size(202, 227);
            this.btAgenda.MinimumSize = new System.Drawing.Size(202, 60);
            this.btAgenda.Name = "btAgenda";
            this.btAgenda.Size = new System.Drawing.Size(202, 60);
            this.btAgenda.TabIndex = 0;
            this.btAgenda.Text = "Agenda";
            this.btAgenda.TextImageRelation = System.Windows.Forms.TextImageRelation.TextBeforeImage;
            this.btAgenda.UseVisualStyleBackColor = false;
            this.btAgenda.Click += new System.EventHandler(this.btAgenda_Click_1);
            // 
            // panelResumo
            // 
            this.panelResumo.BackColor = System.Drawing.Color.Silver;
            this.panelResumo.Controls.Add(this.saldo);
            this.panelResumo.Controls.Add(this.numCancelados);
            this.panelResumo.Controls.Add(this.numConcluidos);
            this.panelResumo.Controls.Add(this.numAgendamentos);
            this.panelResumo.Controls.Add(this.label5);
            this.panelResumo.Controls.Add(this.label4);
            this.panelResumo.Controls.Add(this.label1);
            this.panelResumo.Controls.Add(this.label3);
            this.panelResumo.Location = new System.Drawing.Point(1, 409);
            this.panelResumo.Name = "panelResumo";
            this.panelResumo.Size = new System.Drawing.Size(201, 250);
            this.panelResumo.TabIndex = 15;
            // 
            // saldo
            // 
            this.saldo.AutoSize = true;
            this.saldo.Location = new System.Drawing.Point(89, 220);
            this.saldo.Name = "saldo";
            this.saldo.Size = new System.Drawing.Size(19, 13);
            this.saldo.TabIndex = 7;
            this.saldo.Text = "50";
            // 
            // numCancelados
            // 
            this.numCancelados.AutoSize = true;
            this.numCancelados.Location = new System.Drawing.Point(89, 143);
            this.numCancelados.Name = "numCancelados";
            this.numCancelados.Size = new System.Drawing.Size(19, 13);
            this.numCancelados.TabIndex = 6;
            this.numCancelados.Text = "50";
            // 
            // numConcluidos
            // 
            this.numConcluidos.AutoSize = true;
            this.numConcluidos.Location = new System.Drawing.Point(89, 85);
            this.numConcluidos.Name = "numConcluidos";
            this.numConcluidos.Size = new System.Drawing.Size(19, 13);
            this.numConcluidos.TabIndex = 5;
            this.numConcluidos.Text = "50";
            // 
            // numAgendamentos
            // 
            this.numAgendamentos.AutoSize = true;
            this.numAgendamentos.Location = new System.Drawing.Point(89, 28);
            this.numAgendamentos.Name = "numAgendamentos";
            this.numAgendamentos.Size = new System.Drawing.Size(19, 13);
            this.numAgendamentos.TabIndex = 4;
            this.numAgendamentos.Text = "50";
            // 
            // label5
            // 
            this.label5.AutoSize = true;
            this.label5.Font = new System.Drawing.Font("Lucida Fax", 12F, System.Drawing.FontStyle.Regular, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.label5.Location = new System.Drawing.Point(73, 196);
            this.label5.Name = "label5";
            this.label5.Size = new System.Drawing.Size(52, 18);
            this.label5.TabIndex = 3;
            this.label5.Text = "Saldo";
            this.label5.TextAlign = System.Drawing.ContentAlignment.MiddleCenter;
            // 
            // label4
            // 
            this.label4.AutoSize = true;
            this.label4.Font = new System.Drawing.Font("Lucida Fax", 12F, System.Drawing.FontStyle.Regular, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.label4.Location = new System.Drawing.Point(51, 113);
            this.label4.Name = "label4";
            this.label4.Size = new System.Drawing.Size(100, 18);
            this.label4.TabIndex = 2;
            this.label4.Text = "Cancelados";
            this.label4.TextAlign = System.Drawing.ContentAlignment.MiddleCenter;
            // 
            // label1
            // 
            this.label1.AutoSize = true;
            this.label1.Font = new System.Drawing.Font("Lucida Fax", 12F, System.Drawing.FontStyle.Regular, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.label1.Location = new System.Drawing.Point(51, 59);
            this.label1.Name = "label1";
            this.label1.Size = new System.Drawing.Size(99, 18);
            this.label1.TabIndex = 1;
            this.label1.Text = "Concluidos";
            this.label1.TextAlign = System.Drawing.ContentAlignment.MiddleCenter;
            // 
            // label3
            // 
            this.label3.AutoSize = true;
            this.label3.Font = new System.Drawing.Font("Lucida Fax", 12F, System.Drawing.FontStyle.Regular, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.label3.Location = new System.Drawing.Point(36, 7);
            this.label3.Name = "label3";
            this.label3.Size = new System.Drawing.Size(129, 18);
            this.label3.TabIndex = 0;
            this.label3.Text = "Agendamentos";
            this.label3.TextAlign = System.Drawing.ContentAlignment.MiddleCenter;
            // 
            // panelDropDown2
            // 
            this.panelDropDown2.BackColor = System.Drawing.Color.Transparent;
            this.panelDropDown2.Controls.Add(this.btFuncionarioEditar);
            this.panelDropDown2.Controls.Add(this.btFuncionarioConsulta);
            this.panelDropDown2.Controls.Add(this.btFuncionario);
            this.panelDropDown2.Location = new System.Drawing.Point(0, 60);
            this.panelDropDown2.MaximumSize = new System.Drawing.Size(202, 142);
            this.panelDropDown2.MinimumSize = new System.Drawing.Size(202, 60);
            this.panelDropDown2.Name = "panelDropDown2";
            this.panelDropDown2.Size = new System.Drawing.Size(202, 60);
            this.panelDropDown2.TabIndex = 12;
            // 
            // btFuncionarioEditar
            // 
            this.btFuncionarioEditar.BackColor = System.Drawing.Color.PaleTurquoise;
            this.btFuncionarioEditar.Dock = System.Windows.Forms.DockStyle.Top;
            this.btFuncionarioEditar.FlatAppearance.BorderSize = 0;
            this.btFuncionarioEditar.FlatStyle = System.Windows.Forms.FlatStyle.Flat;
            this.btFuncionarioEditar.Font = new System.Drawing.Font("Microsoft Sans Serif", 12F, System.Drawing.FontStyle.Regular, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.btFuncionarioEditar.Location = new System.Drawing.Point(0, 101);
            this.btFuncionarioEditar.Name = "btFuncionarioEditar";
            this.btFuncionarioEditar.Size = new System.Drawing.Size(202, 41);
            this.btFuncionarioEditar.TabIndex = 2;
            this.btFuncionarioEditar.Text = "Editar";
            this.btFuncionarioEditar.UseVisualStyleBackColor = false;
            this.btFuncionarioEditar.Click += new System.EventHandler(this.btFuncionarioEditar_Click);
            // 
            // btFuncionarioConsulta
            // 
            this.btFuncionarioConsulta.BackColor = System.Drawing.Color.PaleTurquoise;
            this.btFuncionarioConsulta.Dock = System.Windows.Forms.DockStyle.Top;
            this.btFuncionarioConsulta.FlatAppearance.BorderSize = 0;
            this.btFuncionarioConsulta.FlatStyle = System.Windows.Forms.FlatStyle.Flat;
            this.btFuncionarioConsulta.Font = new System.Drawing.Font("Microsoft Sans Serif", 12F, System.Drawing.FontStyle.Regular, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.btFuncionarioConsulta.Location = new System.Drawing.Point(0, 60);
            this.btFuncionarioConsulta.Name = "btFuncionarioConsulta";
            this.btFuncionarioConsulta.Size = new System.Drawing.Size(202, 41);
            this.btFuncionarioConsulta.TabIndex = 1;
            this.btFuncionarioConsulta.Text = "Consulta";
            this.btFuncionarioConsulta.UseVisualStyleBackColor = false;
            this.btFuncionarioConsulta.Click += new System.EventHandler(this.btFuncionarioConsulta_Click);
            // 
            // btFuncionario
            // 
            this.btFuncionario.BackColor = System.Drawing.Color.Turquoise;
            this.btFuncionario.Dock = System.Windows.Forms.DockStyle.Top;
            this.btFuncionario.FlatAppearance.BorderSize = 0;
            this.btFuncionario.FlatStyle = System.Windows.Forms.FlatStyle.Flat;
            this.btFuncionario.Font = new System.Drawing.Font("Microsoft Sans Serif", 14.25F, System.Drawing.FontStyle.Regular, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.btFuncionario.Image = global::Projeto_V1.Properties.Resources.Expand_Arrow_20px;
            this.btFuncionario.Location = new System.Drawing.Point(0, 0);
            this.btFuncionario.MaximumSize = new System.Drawing.Size(202, 227);
            this.btFuncionario.MinimumSize = new System.Drawing.Size(202, 60);
            this.btFuncionario.Name = "btFuncionario";
            this.btFuncionario.Size = new System.Drawing.Size(202, 60);
            this.btFuncionario.TabIndex = 0;
            this.btFuncionario.Text = "Funcionários";
            this.btFuncionario.TextAlign = System.Drawing.ContentAlignment.MiddleLeft;
            this.btFuncionario.TextImageRelation = System.Windows.Forms.TextImageRelation.TextBeforeImage;
            this.btFuncionario.UseVisualStyleBackColor = false;
            this.btFuncionario.Click += new System.EventHandler(this.btFuncionario_Click_1);
            // 
            // panelDropDown3
            // 
            this.panelDropDown3.BackColor = System.Drawing.Color.Transparent;
            this.panelDropDown3.Controls.Add(this.btClienteEditar);
            this.panelDropDown3.Controls.Add(this.btClienteConsulta);
            this.panelDropDown3.Controls.Add(this.btCliente);
            this.panelDropDown3.Location = new System.Drawing.Point(0, 119);
            this.panelDropDown3.MaximumSize = new System.Drawing.Size(202, 142);
            this.panelDropDown3.MinimumSize = new System.Drawing.Size(202, 60);
            this.panelDropDown3.Name = "panelDropDown3";
            this.panelDropDown3.Size = new System.Drawing.Size(202, 60);
            this.panelDropDown3.TabIndex = 13;
            // 
            // btClienteEditar
            // 
            this.btClienteEditar.BackColor = System.Drawing.Color.PaleTurquoise;
            this.btClienteEditar.Dock = System.Windows.Forms.DockStyle.Top;
            this.btClienteEditar.FlatAppearance.BorderSize = 0;
            this.btClienteEditar.FlatStyle = System.Windows.Forms.FlatStyle.Flat;
            this.btClienteEditar.Font = new System.Drawing.Font("Microsoft Sans Serif", 12F, System.Drawing.FontStyle.Regular, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.btClienteEditar.Location = new System.Drawing.Point(0, 101);
            this.btClienteEditar.Name = "btClienteEditar";
            this.btClienteEditar.Size = new System.Drawing.Size(202, 41);
            this.btClienteEditar.TabIndex = 2;
            this.btClienteEditar.Text = "Editar";
            this.btClienteEditar.UseVisualStyleBackColor = false;
            this.btClienteEditar.Click += new System.EventHandler(this.btClienteEditar_Click);
            // 
            // btClienteConsulta
            // 
            this.btClienteConsulta.BackColor = System.Drawing.Color.PaleTurquoise;
            this.btClienteConsulta.Dock = System.Windows.Forms.DockStyle.Top;
            this.btClienteConsulta.FlatAppearance.BorderSize = 0;
            this.btClienteConsulta.FlatStyle = System.Windows.Forms.FlatStyle.Flat;
            this.btClienteConsulta.Font = new System.Drawing.Font("Microsoft Sans Serif", 12F, System.Drawing.FontStyle.Regular, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.btClienteConsulta.Location = new System.Drawing.Point(0, 60);
            this.btClienteConsulta.Name = "btClienteConsulta";
            this.btClienteConsulta.Size = new System.Drawing.Size(202, 41);
            this.btClienteConsulta.TabIndex = 1;
            this.btClienteConsulta.Text = "Consulta";
            this.btClienteConsulta.UseVisualStyleBackColor = false;
            this.btClienteConsulta.Click += new System.EventHandler(this.btClienteConsulta_Click);
            // 
            // btCliente
            // 
            this.btCliente.BackColor = System.Drawing.Color.Turquoise;
            this.btCliente.Dock = System.Windows.Forms.DockStyle.Top;
            this.btCliente.FlatAppearance.BorderSize = 0;
            this.btCliente.FlatStyle = System.Windows.Forms.FlatStyle.Flat;
            this.btCliente.Font = new System.Drawing.Font("Microsoft Sans Serif", 14.25F, System.Drawing.FontStyle.Regular, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.btCliente.Image = global::Projeto_V1.Properties.Resources.Expand_Arrow_20px;
            this.btCliente.Location = new System.Drawing.Point(0, 0);
            this.btCliente.MaximumSize = new System.Drawing.Size(202, 227);
            this.btCliente.MinimumSize = new System.Drawing.Size(202, 60);
            this.btCliente.Name = "btCliente";
            this.btCliente.Size = new System.Drawing.Size(202, 60);
            this.btCliente.TabIndex = 0;
            this.btCliente.Text = "Clientes";
            this.btCliente.TextImageRelation = System.Windows.Forms.TextImageRelation.TextBeforeImage;
            this.btCliente.UseVisualStyleBackColor = false;
            this.btCliente.Click += new System.EventHandler(this.btClientes_Click_1);
            // 
            // panelDropDown4
            // 
            this.panelDropDown4.BackColor = System.Drawing.Color.Transparent;
            this.panelDropDown4.Controls.Add(this.btServicoEditar);
            this.panelDropDown4.Controls.Add(this.btServicoConsulta);
            this.panelDropDown4.Controls.Add(this.btServicos);
            this.panelDropDown4.Location = new System.Drawing.Point(0, 179);
            this.panelDropDown4.MaximumSize = new System.Drawing.Size(202, 142);
            this.panelDropDown4.MinimumSize = new System.Drawing.Size(202, 60);
            this.panelDropDown4.Name = "panelDropDown4";
            this.panelDropDown4.Size = new System.Drawing.Size(202, 60);
            this.panelDropDown4.TabIndex = 14;
            // 
            // btServicoEditar
            // 
            this.btServicoEditar.BackColor = System.Drawing.Color.PaleTurquoise;
            this.btServicoEditar.Dock = System.Windows.Forms.DockStyle.Top;
            this.btServicoEditar.FlatAppearance.BorderSize = 0;
            this.btServicoEditar.FlatStyle = System.Windows.Forms.FlatStyle.Flat;
            this.btServicoEditar.Font = new System.Drawing.Font("Microsoft Sans Serif", 12F, System.Drawing.FontStyle.Regular, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.btServicoEditar.Location = new System.Drawing.Point(0, 101);
            this.btServicoEditar.Name = "btServicoEditar";
            this.btServicoEditar.Size = new System.Drawing.Size(202, 41);
            this.btServicoEditar.TabIndex = 2;
            this.btServicoEditar.Text = "Editar";
            this.btServicoEditar.UseVisualStyleBackColor = false;
            this.btServicoEditar.Click += new System.EventHandler(this.btServicoEditar_Click);
            // 
            // btServicoConsulta
            // 
            this.btServicoConsulta.BackColor = System.Drawing.Color.PaleTurquoise;
            this.btServicoConsulta.Dock = System.Windows.Forms.DockStyle.Top;
            this.btServicoConsulta.FlatAppearance.BorderSize = 0;
            this.btServicoConsulta.FlatStyle = System.Windows.Forms.FlatStyle.Flat;
            this.btServicoConsulta.Font = new System.Drawing.Font("Microsoft Sans Serif", 12F, System.Drawing.FontStyle.Regular, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.btServicoConsulta.Location = new System.Drawing.Point(0, 60);
            this.btServicoConsulta.Name = "btServicoConsulta";
            this.btServicoConsulta.Size = new System.Drawing.Size(202, 41);
            this.btServicoConsulta.TabIndex = 1;
            this.btServicoConsulta.Text = "Consulta";
            this.btServicoConsulta.UseVisualStyleBackColor = false;
            this.btServicoConsulta.Click += new System.EventHandler(this.btServicoConsulta_Click);
            // 
            // btServicos
            // 
            this.btServicos.BackColor = System.Drawing.Color.Turquoise;
            this.btServicos.Dock = System.Windows.Forms.DockStyle.Top;
            this.btServicos.FlatAppearance.BorderSize = 0;
            this.btServicos.FlatStyle = System.Windows.Forms.FlatStyle.Flat;
            this.btServicos.Font = new System.Drawing.Font("Microsoft Sans Serif", 14.25F, System.Drawing.FontStyle.Regular, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.btServicos.Image = global::Projeto_V1.Properties.Resources.Expand_Arrow_20px;
            this.btServicos.Location = new System.Drawing.Point(0, 0);
            this.btServicos.MaximumSize = new System.Drawing.Size(202, 227);
            this.btServicos.MinimumSize = new System.Drawing.Size(202, 60);
            this.btServicos.Name = "btServicos";
            this.btServicos.Size = new System.Drawing.Size(202, 60);
            this.btServicos.TabIndex = 0;
            this.btServicos.Text = "Serviços";
            this.btServicos.TextImageRelation = System.Windows.Forms.TextImageRelation.TextBeforeImage;
            this.btServicos.UseVisualStyleBackColor = false;
            this.btServicos.Click += new System.EventHandler(this.btServicos_Click_1);
            // 
            // timerRelogio
            // 
            this.timerRelogio.Enabled = true;
            this.timerRelogio.Tick += new System.EventHandler(this.timerRelogio_Tick_1);
            // 
            // timerAgenda
            // 
            this.timerAgenda.Enabled = true;
            this.timerAgenda.Interval = 15;
            this.timerAgenda.Tick += new System.EventHandler(this.timerAgenda_Tick_1);
            // 
            // timerFuncionarios
            // 
            this.timerFuncionarios.Enabled = true;
            this.timerFuncionarios.Interval = 15;
            this.timerFuncionarios.Tick += new System.EventHandler(this.timerFuncionarios_Tick_1);
            // 
            // timerClientes
            // 
            this.timerClientes.Enabled = true;
            this.timerClientes.Interval = 15;
            this.timerClientes.Tick += new System.EventHandler(this.timerClientes_Tick_1);
            // 
            // timerServicos
            // 
            this.timerServicos.Enabled = true;
            this.timerServicos.Interval = 15;
            this.timerServicos.Tick += new System.EventHandler(this.timerServicos_Tick_1);
            // 
            // panelAgenda
            // 
            this.panelAgenda.Anchor = ((System.Windows.Forms.AnchorStyles)((((System.Windows.Forms.AnchorStyles.Top | System.Windows.Forms.AnchorStyles.Bottom) 
            | System.Windows.Forms.AnchorStyles.Left) 
            | System.Windows.Forms.AnchorStyles.Right)));
            this.panelAgenda.Location = new System.Drawing.Point(202, 69);
            this.panelAgenda.MaximumSize = new System.Drawing.Size(1149, 659);
            this.panelAgenda.MinimumSize = new System.Drawing.Size(1149, 659);
            this.panelAgenda.Name = "panelAgenda";
            this.panelAgenda.Size = new System.Drawing.Size(1149, 659);
            this.panelAgenda.TabIndex = 3;
            // 
            // panelTop
            // 
            this.panelTop.Anchor = ((System.Windows.Forms.AnchorStyles)(((System.Windows.Forms.AnchorStyles.Top | System.Windows.Forms.AnchorStyles.Left) 
            | System.Windows.Forms.AnchorStyles.Right)));
            this.panelTop.BackColor = System.Drawing.Color.FromArgb(((int)(((byte)(128)))), ((int)(((byte)(255)))), ((int)(((byte)(255)))));
            this.panelTop.Controls.Add(this.labelHoraLogin);
            this.panelTop.Controls.Add(this.label2);
            this.panelTop.Controls.Add(this.labelUsuario);
            this.panelTop.Controls.Add(this.logoutButton);
            this.panelTop.Location = new System.Drawing.Point(202, 0);
            this.panelTop.Name = "panelTop";
            this.panelTop.Size = new System.Drawing.Size(1149, 69);
            this.panelTop.TabIndex = 4;
            // 
            // labelHoraLogin
            // 
            this.labelHoraLogin.AutoSize = true;
            this.labelHoraLogin.Font = new System.Drawing.Font("Lucida Fax", 12F, System.Drawing.FontStyle.Regular, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.labelHoraLogin.Location = new System.Drawing.Point(514, 26);
            this.labelHoraLogin.Name = "labelHoraLogin";
            this.labelHoraLogin.Size = new System.Drawing.Size(145, 18);
            this.labelHoraLogin.TabIndex = 3;
            this.labelHoraLogin.Text = "Horário de login:";
            // 
            // label2
            // 
            this.label2.AutoSize = true;
            this.label2.Font = new System.Drawing.Font("Lucida Fax", 12F, System.Drawing.FontStyle.Regular, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.label2.Location = new System.Drawing.Point(315, 26);
            this.label2.Name = "label2";
            this.label2.Size = new System.Drawing.Size(0, 18);
            this.label2.TabIndex = 2;
            // 
            // labelUsuario
            // 
            this.labelUsuario.AutoSize = true;
            this.labelUsuario.Font = new System.Drawing.Font("Lucida Fax", 12F, System.Drawing.FontStyle.Regular, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.labelUsuario.Location = new System.Drawing.Point(5, 26);
            this.labelUsuario.Name = "labelUsuario";
            this.labelUsuario.Size = new System.Drawing.Size(75, 18);
            this.labelUsuario.TabIndex = 1;
            this.labelUsuario.Text = "Usuário:";
            // 
            // logoutButton
            // 
            this.logoutButton.Anchor = ((System.Windows.Forms.AnchorStyles)((System.Windows.Forms.AnchorStyles.Top | System.Windows.Forms.AnchorStyles.Right)));
            this.logoutButton.Dock = System.Windows.Forms.DockStyle.None;
            this.logoutButton.GripStyle = System.Windows.Forms.ToolStripGripStyle.Hidden;
            this.logoutButton.ImageScalingSize = new System.Drawing.Size(32, 32);
            this.logoutButton.Items.AddRange(new System.Windows.Forms.ToolStripItem[] {
            this.toolStripButton1});
            this.logoutButton.Location = new System.Drawing.Point(1099, 13);
            this.logoutButton.Name = "logoutButton";
            this.logoutButton.Size = new System.Drawing.Size(39, 39);
            this.logoutButton.TabIndex = 0;
            this.logoutButton.Text = "Logout";
            // 
            // toolStripButton1
            // 
            this.toolStripButton1.DisplayStyle = System.Windows.Forms.ToolStripItemDisplayStyle.Image;
            this.toolStripButton1.Image = ((System.Drawing.Image)(resources.GetObject("toolStripButton1.Image")));
            this.toolStripButton1.ImageTransparentColor = System.Drawing.Color.Magenta;
            this.toolStripButton1.Name = "toolStripButton1";
            this.toolStripButton1.Size = new System.Drawing.Size(36, 36);
            this.toolStripButton1.Text = "Logout";
            // 
            // Principal
            // 
            this.AutoScaleDimensions = new System.Drawing.SizeF(6F, 13F);
            this.AutoScaleMode = System.Windows.Forms.AutoScaleMode.Font;
            this.BackColor = System.Drawing.SystemColors.ButtonHighlight;
            this.ClientSize = new System.Drawing.Size(1350, 729);
            this.Controls.Add(this.panelTop);
            this.Controls.Add(this.panelAgenda);
            this.Controls.Add(this.panelLeftModal);
            this.Controls.Add(this.panelLeftTop);
            this.MaximumSize = new System.Drawing.Size(1920, 1080);
            this.MinimumSize = new System.Drawing.Size(1366, 768);
            this.Name = "Principal";
            this.Text = "Form1";
            this.panelLeftTop.ResumeLayout(false);
            this.panelLeftTop.PerformLayout();
            ((System.ComponentModel.ISupportInitialize)(this.relogioGif)).EndInit();
            this.panelLeftModal.ResumeLayout(false);
            this.panelDropDown.ResumeLayout(false);
            this.panelResumo.ResumeLayout(false);
            this.panelResumo.PerformLayout();
            this.panelDropDown2.ResumeLayout(false);
            this.panelDropDown3.ResumeLayout(false);
            this.panelDropDown4.ResumeLayout(false);
            this.panelTop.ResumeLayout(false);
            this.panelTop.PerformLayout();
            this.logoutButton.ResumeLayout(false);
            this.logoutButton.PerformLayout();
            this.ResumeLayout(false);

        }

        #endregion
        private System.Windows.Forms.Panel panelLeftTop;
        private System.Windows.Forms.Panel panelLeftModal;
        private System.Windows.Forms.PictureBox relogioGif;
        private System.Windows.Forms.Label data;
        private System.Windows.Forms.Label hora;
        private System.Windows.Forms.Timer timerRelogio;
        private System.Windows.Forms.Panel panelDropDown;
        private System.Windows.Forms.Button btAgendaAgendamento;
        private System.Windows.Forms.Button btAgendaConsulta;
        private System.Windows.Forms.Button btAgenda;
        private System.Windows.Forms.Panel panelDropDown2;
        private System.Windows.Forms.Button btFuncionarioEditar;
        private System.Windows.Forms.Button btFuncionarioConsulta;
        private System.Windows.Forms.Button btFuncionario;
        private System.Windows.Forms.Panel panelDropDown3;
        private System.Windows.Forms.Button btClienteEditar;
        private System.Windows.Forms.Button btClienteConsulta;
        private System.Windows.Forms.Button btCliente;
        private System.Windows.Forms.Panel panelDropDown4;
        private System.Windows.Forms.Button btServicoEditar;
        private System.Windows.Forms.Button btServicoConsulta;
        private System.Windows.Forms.Button btServicos;
        private System.Windows.Forms.Timer timerAgenda;
        private System.Windows.Forms.Timer timerFuncionarios;
        private System.Windows.Forms.Timer timerClientes;
        private System.Windows.Forms.Timer timerServicos;
        private System.Windows.Forms.Panel panelAgenda;
        private System.Windows.Forms.Panel panelTop;
        private System.Windows.Forms.ToolStrip logoutButton;
        private System.Windows.Forms.ToolStripButton toolStripButton1;
        private System.Windows.Forms.Label label2;
        private System.Windows.Forms.Label labelUsuario;
        private System.Windows.Forms.Panel panelResumo;
        private System.Windows.Forms.Label label3;
        private System.Windows.Forms.Label labelHoraLogin;
        private System.Windows.Forms.Label saldo;
        private System.Windows.Forms.Label numCancelados;
        private System.Windows.Forms.Label numConcluidos;
        private System.Windows.Forms.Label numAgendamentos;
        private System.Windows.Forms.Label label5;
        private System.Windows.Forms.Label label4;
        private System.Windows.Forms.Label label1;
    }
}

