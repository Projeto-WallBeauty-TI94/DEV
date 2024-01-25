namespace Projeto_V1.Forms
{
    partial class frmEditarCli
    {
        /// <summary>
        /// Required designer variable.
        /// </summary>
        private System.ComponentModel.IContainer components = null;

        /// <summary>
        /// Clean up any resources being used.
        /// </summary>
        /// <param name="disposing">true if managed resources should be disposed; otherwise, false.</param>
        protected override void Dispose(bool disposing)
        {
            if (disposing && (components != null))
            {
                components.Dispose();
            }
            base.Dispose(disposing);
        }

        #region Windows Form Designer generated code

        /// <summary>
        /// Required method for Designer support - do not modify
        /// the contents of this method with the code editor.
        /// </summary>
        private void InitializeComponent()
        {
            this.label1 = new System.Windows.Forms.Label();
            this.nome = new System.Windows.Forms.Label();
            this.cpf = new System.Windows.Forms.Label();
            this.telefone = new System.Windows.Forms.Label();
            this.email = new System.Windows.Forms.Label();
            this.tbNome = new System.Windows.Forms.TextBox();
            this.tbCpf = new System.Windows.Forms.TextBox();
            this.tbTel = new System.Windows.Forms.TextBox();
            this.tbEmail = new System.Windows.Forms.TextBox();
            this.btnCadastrar = new System.Windows.Forms.Button();
            this.SuspendLayout();
            // 
            // label1
            // 
            this.label1.AutoSize = true;
            this.label1.Font = new System.Drawing.Font("Lucida Fax", 21.75F, System.Drawing.FontStyle.Bold, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.label1.Location = new System.Drawing.Point(411, 102);
            this.label1.Name = "label1";
            this.label1.Size = new System.Drawing.Size(326, 33);
            this.label1.TabIndex = 0;
            this.label1.Text = "Cadastro de Usuário";
            // 
            // nome
            // 
            this.nome.Font = new System.Drawing.Font("Lucida Fax", 14.25F, System.Drawing.FontStyle.Bold, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.nome.Location = new System.Drawing.Point(284, 227);
            this.nome.Name = "nome";
            this.nome.RightToLeft = System.Windows.Forms.RightToLeft.Yes;
            this.nome.Size = new System.Drawing.Size(110, 27);
            this.nome.TabIndex = 1;
            this.nome.Text = ":Nome";
            this.nome.UseCompatibleTextRendering = true;
            // 
            // cpf
            // 
            this.cpf.Font = new System.Drawing.Font("Lucida Fax", 14.25F, System.Drawing.FontStyle.Bold, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.cpf.Location = new System.Drawing.Point(284, 276);
            this.cpf.Name = "cpf";
            this.cpf.RightToLeft = System.Windows.Forms.RightToLeft.Yes;
            this.cpf.Size = new System.Drawing.Size(110, 22);
            this.cpf.TabIndex = 2;
            this.cpf.Text = ":Cpf";
            // 
            // telefone
            // 
            this.telefone.Font = new System.Drawing.Font("Lucida Fax", 14.25F, System.Drawing.FontStyle.Bold, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.telefone.Location = new System.Drawing.Point(284, 323);
            this.telefone.Name = "telefone";
            this.telefone.RightToLeft = System.Windows.Forms.RightToLeft.Yes;
            this.telefone.Size = new System.Drawing.Size(112, 22);
            this.telefone.TabIndex = 3;
            this.telefone.Text = ":Telefone";
            // 
            // email
            // 
            this.email.Font = new System.Drawing.Font("Lucida Fax", 14.25F, System.Drawing.FontStyle.Bold, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.email.Location = new System.Drawing.Point(284, 371);
            this.email.Name = "email";
            this.email.RightToLeft = System.Windows.Forms.RightToLeft.Yes;
            this.email.Size = new System.Drawing.Size(110, 22);
            this.email.TabIndex = 4;
            this.email.Text = ":E-mail";
            // 
            // tbNome
            // 
            this.tbNome.Location = new System.Drawing.Point(413, 227);
            this.tbNome.Multiline = true;
            this.tbNome.Name = "tbNome";
            this.tbNome.Size = new System.Drawing.Size(324, 22);
            this.tbNome.TabIndex = 5;
            // 
            // tbCpf
            // 
            this.tbCpf.Location = new System.Drawing.Point(413, 276);
            this.tbCpf.Multiline = true;
            this.tbCpf.Name = "tbCpf";
            this.tbCpf.Size = new System.Drawing.Size(324, 22);
            this.tbCpf.TabIndex = 6;
            // 
            // tbTel
            // 
            this.tbTel.Location = new System.Drawing.Point(413, 323);
            this.tbTel.Multiline = true;
            this.tbTel.Name = "tbTel";
            this.tbTel.Size = new System.Drawing.Size(324, 22);
            this.tbTel.TabIndex = 7;
            // 
            // tbEmail
            // 
            this.tbEmail.Location = new System.Drawing.Point(413, 371);
            this.tbEmail.Multiline = true;
            this.tbEmail.Name = "tbEmail";
            this.tbEmail.Size = new System.Drawing.Size(324, 22);
            this.tbEmail.TabIndex = 8;
            // 
            // btnCadastrar
            // 
            this.btnCadastrar.Location = new System.Drawing.Point(413, 442);
            this.btnCadastrar.Name = "btnCadastrar";
            this.btnCadastrar.Size = new System.Drawing.Size(324, 51);
            this.btnCadastrar.TabIndex = 9;
            this.btnCadastrar.Text = "Cadastrar";
            this.btnCadastrar.UseVisualStyleBackColor = true;
            // 
            // frmCriarCli
            // 
            this.AutoScaleDimensions = new System.Drawing.SizeF(6F, 13F);
            this.AutoScaleMode = System.Windows.Forms.AutoScaleMode.Font;
            this.ClientSize = new System.Drawing.Size(1149, 659);
            this.Controls.Add(this.btnCadastrar);
            this.Controls.Add(this.tbEmail);
            this.Controls.Add(this.tbTel);
            this.Controls.Add(this.tbCpf);
            this.Controls.Add(this.tbNome);
            this.Controls.Add(this.email);
            this.Controls.Add(this.telefone);
            this.Controls.Add(this.cpf);
            this.Controls.Add(this.nome);
            this.Controls.Add(this.label1);
            this.FormBorderStyle = System.Windows.Forms.FormBorderStyle.None;
            this.MaximizeBox = false;
            this.MaximumSize = new System.Drawing.Size(1149, 659);
            this.MinimumSize = new System.Drawing.Size(1149, 659);
            this.Name = "frmCriarCli";
            this.Text = "frmCriarCli";
            this.ResumeLayout(false);
            this.PerformLayout();

        }

        #endregion

        private System.Windows.Forms.Label label1;
        private System.Windows.Forms.Label nome;
        private System.Windows.Forms.Label cpf;
        private System.Windows.Forms.Label telefone;
        private System.Windows.Forms.Label email;
        private System.Windows.Forms.TextBox tbNome;
        private System.Windows.Forms.TextBox tbCpf;
        private System.Windows.Forms.TextBox tbTel;
        private System.Windows.Forms.TextBox tbEmail;
        private System.Windows.Forms.Button btnCadastrar;
    }
}