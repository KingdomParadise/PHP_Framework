using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Drawing;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Windows.Forms;
using MySql.Data.MySqlClient;


//şuan için böyle uygun mudur

namespace WindowsFormsApp1
{
    public partial class login : Form
    {
        public login()
        {
            InitializeComponent();
        }
        string constuser = "admin", constpass = "admin";
        MySqlConnection con = new MySqlConnection("Server=win16p73-516.srvpanel.com;Database=tozbitiren_com_sistem;Uid=tozbi_user;Pwd=4*42vkyO;Port=3306");
        MySqlCommand com;
        private void button1_Click(object sender, EventArgs e)
        {
            string getuser = username.Text;
            string getpass = password.Text;
            if (getuser.Length!=0&&getpass.Length!=0)
            {
                if (getuser==constuser&&getpass==constpass)
                {
                    this.Hide();
                    var form1 = new Form1();
                    form1.Closed += (s, args) => this.Close();
                    form1.Show();
                }
                else
                {
                    try
                    {
                        con.Open();
                        com = new MySqlCommand("select username,password from sezer", con);
                        com.Connection = con;
                        MySqlDataReader read = com.ExecuteReader();
                        while (read.Read())
                        {
                            if (getuser == read[0].ToString()&&getpass==read[1].ToString())
                        {
                                this.Hide();
                                label3.Visible = false;
                                var form1 = new Form1();
                                form1.Closed += (s, args) => this.Close();
                                form1.Show();
                                break;
                            }
                        }
                        con.Close();
                        label3.Visible = true;


                    }
                    catch (Exception v)
                    {
                        MessageBox.Show("Hata : "+v.ToString());
                    }
                }
            }
            else
            {
                MessageBox.Show("Lütfen Geçerli Giriş Yapın !");
            }
        }
    }
}
