namespace Clinica
{
    partial class Doctores
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
            System.ComponentModel.ComponentResourceManager resources = new System.ComponentModel.ComponentResourceManager(typeof(Doctores));
            this.Salir = new System.Windows.Forms.Button();
            this.panel3 = new System.Windows.Forms.Panel();
            this.panel3.SuspendLayout();
            this.SuspendLayout();
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
            this.Salir.Location = new System.Drawing.Point(1203, 0);
            this.Salir.Name = "Salir";
            this.Salir.Size = new System.Drawing.Size(90, 78);
            this.Salir.TabIndex = 12;
            this.Salir.Text = "Salir";
            this.Salir.TextAlign = System.Drawing.ContentAlignment.BottomCenter;
            this.Salir.UseVisualStyleBackColor = true;
            this.Salir.Click += new System.EventHandler(this.Salir_Click);
            // 
            // panel3
            // 
            this.panel3.BackColor = System.Drawing.Color.SteelBlue;
            this.panel3.Controls.Add(this.Salir);
            this.panel3.Dock = System.Windows.Forms.DockStyle.Bottom;
            this.panel3.Location = new System.Drawing.Point(0, 702);
            this.panel3.Name = "panel3";
            this.panel3.Size = new System.Drawing.Size(1293, 78);
            this.panel3.TabIndex = 23;
            // 
            // Doctores
            // 
            this.AutoScaleDimensions = new System.Drawing.SizeF(6F, 13F);
            this.AutoScaleMode = System.Windows.Forms.AutoScaleMode.Font;
            this.ClientSize = new System.Drawing.Size(1293, 780);
            this.Controls.Add(this.panel3);
            this.FormBorderStyle = System.Windows.Forms.FormBorderStyle.None;
            this.Name = "Doctores";
            this.Text = "Doctores";
            this.WindowState = System.Windows.Forms.FormWindowState.Maximized;
            this.panel3.ResumeLayout(false);
            this.ResumeLayout(false);

        }

        #endregion

        public System.Windows.Forms.Button Salir;
        public System.Windows.Forms.Panel panel3;
    }
}