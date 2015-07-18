namespace Clinica
{
    partial class Form1
    {
        /// <summary>
        /// Variable del diseñador requerida.
        /// </summary>
        private System.ComponentModel.IContainer components = null;

        /// <summary>
        /// Limpiar los recursos que se estén utilizando.
        /// </summary>
        /// <param name="disposing">true si los recursos administrados se deben desechar; false en caso contrario.</param>
        protected override void Dispose(bool disposing)
        {
            if (disposing && (components != null))
            {
                components.Dispose();
            }
            base.Dispose(disposing);
        }

        #region Código generado por el Diseñador de Windows Forms

        /// <summary>
        /// Método necesario para admitir el Diseñador. No se puede modificar
        /// el contenido del método con el editor de código.
        /// </summary>
        private void InitializeComponent()
        {
            this.components = new System.ComponentModel.Container();
            System.ComponentModel.ComponentResourceManager resources = new System.ComponentModel.ComponentResourceManager(typeof(Form1));
            this.Centro_acopio = new System.Windows.Forms.Button();
            this.Reportes = new System.Windows.Forms.Panel();
            this.panel4 = new System.Windows.Forms.Panel();
            this.label1 = new System.Windows.Forms.Label();
            this.Empleado = new System.Windows.Forms.Button();
            this.Cliente = new System.Windows.Forms.Button();
            this.panel3 = new System.Windows.Forms.Panel();
            this.Salir = new System.Windows.Forms.Button();
            this.timer1 = new System.Windows.Forms.Timer(this.components);
            this.label2 = new System.Windows.Forms.Label();
            this.Reportes.SuspendLayout();
            this.panel4.SuspendLayout();
            this.panel3.SuspendLayout();
            this.SuspendLayout();
            // 
            // Centro_acopio
            // 
            this.Centro_acopio.BackColor = System.Drawing.Color.CornflowerBlue;
            this.Centro_acopio.Cursor = System.Windows.Forms.Cursors.Hand;
            this.Centro_acopio.FlatAppearance.BorderSize = 0;
            this.Centro_acopio.FlatStyle = System.Windows.Forms.FlatStyle.Flat;
            this.Centro_acopio.Font = new System.Drawing.Font("Microsoft Sans Serif", 9F, System.Drawing.FontStyle.Bold, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.Centro_acopio.ForeColor = System.Drawing.Color.White;
            this.Centro_acopio.Location = new System.Drawing.Point(608, 270);
            this.Centro_acopio.Name = "Centro_acopio";
            this.Centro_acopio.Size = new System.Drawing.Size(104, 97);
            this.Centro_acopio.TabIndex = 19;
            this.Centro_acopio.Text = "Centro de Acopio";
            this.Centro_acopio.UseVisualStyleBackColor = false;
            // 
            // Reportes
            // 
            this.Reportes.BackColor = System.Drawing.Color.SteelBlue;
            this.Reportes.Controls.Add(this.panel4);
            this.Reportes.Controls.Add(this.label1);
            this.Reportes.Dock = System.Windows.Forms.DockStyle.Top;
            this.Reportes.Location = new System.Drawing.Point(0, 0);
            this.Reportes.Name = "Reportes";
            this.Reportes.Size = new System.Drawing.Size(1386, 88);
            this.Reportes.TabIndex = 23;
            // 
            // panel4
            // 
            this.panel4.Controls.Add(this.label2);
            this.panel4.Dock = System.Windows.Forms.DockStyle.Right;
            this.panel4.Location = new System.Drawing.Point(1035, 0);
            this.panel4.Name = "panel4";
            this.panel4.Size = new System.Drawing.Size(351, 88);
            this.panel4.TabIndex = 5;
            // 
            // label1
            // 
            this.label1.AutoSize = true;
            this.label1.BackColor = System.Drawing.Color.Transparent;
            this.label1.Font = new System.Drawing.Font("Microsoft Sans Serif", 48F, System.Drawing.FontStyle.Bold, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.label1.ForeColor = System.Drawing.Color.White;
            this.label1.Location = new System.Drawing.Point(3, 9);
            this.label1.Name = "label1";
            this.label1.Size = new System.Drawing.Size(507, 73);
            this.label1.TabIndex = 4;
            this.label1.Text = "Control de Citas";
            // 
            // Empleado
            // 
            this.Empleado.BackColor = System.Drawing.Color.CornflowerBlue;
            this.Empleado.Cursor = System.Windows.Forms.Cursors.Hand;
            this.Empleado.FlatAppearance.BorderSize = 0;
            this.Empleado.FlatStyle = System.Windows.Forms.FlatStyle.Flat;
            this.Empleado.Font = new System.Drawing.Font("Microsoft Sans Serif", 9F, System.Drawing.FontStyle.Bold, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.Empleado.ForeColor = System.Drawing.Color.White;
            this.Empleado.Location = new System.Drawing.Point(667, 373);
            this.Empleado.Name = "Empleado";
            this.Empleado.Size = new System.Drawing.Size(104, 97);
            this.Empleado.TabIndex = 21;
            this.Empleado.Text = "Citas";
            this.Empleado.UseVisualStyleBackColor = false;
            // 
            // Cliente
            // 
            this.Cliente.BackColor = System.Drawing.Color.PaleVioletRed;
            this.Cliente.Cursor = System.Windows.Forms.Cursors.Hand;
            this.Cliente.FlatAppearance.BorderSize = 0;
            this.Cliente.FlatStyle = System.Windows.Forms.FlatStyle.Flat;
            this.Cliente.Font = new System.Drawing.Font("Microsoft Sans Serif", 9F, System.Drawing.FontStyle.Bold, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.Cliente.ForeColor = System.Drawing.Color.White;
            this.Cliente.Location = new System.Drawing.Point(543, 373);
            this.Cliente.Name = "Cliente";
            this.Cliente.Size = new System.Drawing.Size(104, 97);
            this.Cliente.TabIndex = 20;
            this.Cliente.Text = "Medicos";
            this.Cliente.UseVisualStyleBackColor = false;
            // 
            // panel3
            // 
            this.panel3.BackColor = System.Drawing.Color.SteelBlue;
            this.panel3.Controls.Add(this.Salir);
            this.panel3.Dock = System.Windows.Forms.DockStyle.Bottom;
            this.panel3.Location = new System.Drawing.Point(0, 710);
            this.panel3.Name = "panel3";
            this.panel3.Size = new System.Drawing.Size(1386, 78);
            this.panel3.TabIndex = 22;
            // 
            // Salir
            // 
            this.Salir.Cursor = System.Windows.Forms.Cursors.Hand;
            this.Salir.Dock = System.Windows.Forms.DockStyle.Right;
            this.Salir.FlatAppearance.BorderSize = 0;
            this.Salir.FlatStyle = System.Windows.Forms.FlatStyle.Flat;
            this.Salir.Font = new System.Drawing.Font("Microsoft Sans Serif", 8.25F, System.Drawing.FontStyle.Bold, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.Salir.ForeColor = System.Drawing.Color.White;
            this.Salir.Image = ((System.Drawing.Image)(resources.GetObject("Salir.Image")));
            this.Salir.Location = new System.Drawing.Point(1296, 0);
            this.Salir.Name = "Salir";
            this.Salir.Size = new System.Drawing.Size(90, 78);
            this.Salir.TabIndex = 12;
            this.Salir.Text = "Salir";
            this.Salir.TextAlign = System.Drawing.ContentAlignment.BottomCenter;
            this.Salir.UseVisualStyleBackColor = true;
            this.Salir.Click += new System.EventHandler(this.Salir_Click);
            // 
            // timer1
            // 
            this.timer1.Enabled = true;
            this.timer1.Interval = 200;
            this.timer1.Tick += new System.EventHandler(this.timer1_Tick);
            // 
            // label2
            // 
            this.label2.AutoSize = true;
            this.label2.Font = new System.Drawing.Font("Microsoft Sans Serif", 21.75F, System.Drawing.FontStyle.Regular, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.label2.ForeColor = System.Drawing.Color.White;
            this.label2.Location = new System.Drawing.Point(0, 31);
            this.label2.Name = "label2";
            this.label2.Size = new System.Drawing.Size(93, 33);
            this.label2.TabIndex = 0;
            this.label2.Text = "label2";
            // 
            // Form1
            // 
            this.AutoScaleDimensions = new System.Drawing.SizeF(6F, 13F);
            this.AutoScaleMode = System.Windows.Forms.AutoScaleMode.Font;
            this.BackColor = System.Drawing.Color.White;
            this.ClientSize = new System.Drawing.Size(1386, 788);
            this.Controls.Add(this.Centro_acopio);
            this.Controls.Add(this.Reportes);
            this.Controls.Add(this.Empleado);
            this.Controls.Add(this.Cliente);
            this.Controls.Add(this.panel3);
            this.FormBorderStyle = System.Windows.Forms.FormBorderStyle.None;
            this.Name = "Form1";
            this.Text = "Form1";
            this.WindowState = System.Windows.Forms.FormWindowState.Maximized;
            this.Reportes.ResumeLayout(false);
            this.Reportes.PerformLayout();
            this.panel4.ResumeLayout(false);
            this.panel4.PerformLayout();
            this.panel3.ResumeLayout(false);
            this.ResumeLayout(false);

        }

        #endregion

        public System.Windows.Forms.Button Centro_acopio;
        public System.Windows.Forms.Panel Reportes;
        private System.Windows.Forms.Panel panel4;
        public System.Windows.Forms.Label label1;
        public System.Windows.Forms.Button Empleado;
        public System.Windows.Forms.Button Cliente;
        public System.Windows.Forms.Panel panel3;
        public System.Windows.Forms.Button Salir;
        public System.Windows.Forms.Timer timer1;
        private System.Windows.Forms.Label label2;

    }
}

