using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Drawing;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Windows.Forms;
using System.IO;
using System.Drawing.Drawing2D;
using System.Drawing.Imaging;
using System.Text.RegularExpressions;

namespace WindowsFormsApp1
{
    public partial class Form1 : Form
    {
        public Form1()
        {
            InitializeComponent();
        }


        Bitmap bmp = null;
        OpenFileDialog file;
        string filepath = null;
        private void filepathbutton_Click(object sender, EventArgs e)
        {
            file = new OpenFileDialog();
            file.ShowDialog();
            filepath = file.FileName;
            if (filepath != "")
            {
                bmp = new Bitmap(filepath);
                imageshow.Image = bmp;
                imageshow.SizeMode = PictureBoxSizeMode.Zoom;
                tempimage = new Bitmap(filepath);
                filepathtextbox.Text = filepath;
                Logo.Enabled = true;
                start.Enabled = true;
                brandfontname= new Font("Arial", 11, FontStyle.Bold);
                modelfontname = new Font("Arial", 11, FontStyle.Bold);
                messagefontname = new Font("Arial", 11, FontStyle.Bold);
            }
        }
        string createfilepath = null;
        FolderBrowserDialog folder;
        private void pathsavebutton_Click(object sender, EventArgs e)
        {
            folder = new FolderBrowserDialog();
            folder.ShowDialog();
            createfilepath = folder.SelectedPath;
            if (createfilepath != "")
            {
                foldersavetextbox.Text = createfilepath;
            }
        }

        Font brandfontname;
        Color brandfontcolor;
        FontDialog brandfont = new FontDialog();
        private void brandfont_Click(object sender, EventArgs e)
        {
            brandfont.ShowDialog();
            brandfontname = brandfont.Font;
            brandfontcolor = brandcolor.BackColor;
            brandlabel.Text = brandtext.Text;
            brandlabel.Font = brandfontname;
            brandlabel.ForeColor = brandfontcolor;
            if (checkBox1.Checked)
            {
                brandlabel.Visible = true;
            }
            brandsize_ValueChanged(sender, e);
            if (messagetext.Text.Length == 0)
            {
                brandlabel.Left = (400 / 2) - brandlabel.Width / 2;
            }
            else
            {
                brandlabel.Text = brandtext.Text.ToUpper() + " [ --model-- ]";
                messagelabel.Text = messagetext.Text;
                messagelabel.Visible = true;
                modellabel.Visible = false;
            }
            denge();
        }

        FontDialog selectmodelfont = new FontDialog();
        Font modelfontname;
        Color modelfontcolor;
        Bitmap tempimage, tempimagefiligree;
        private void modelfont_Click(object sender, EventArgs e)
        {
            selectmodelfont.ShowDialog();
            modelfontname = selectmodelfont.Font;
            modelfontcolor = modelcolor.BackColor;
            modellabel.Font = modelfontname;
            modellabel.ForeColor = modelfontcolor;
            modelsize_ValueChanged(sender, e);
            if (messagetext.Text.Length != 0)
            {
                brandlabel.Text = brandtext.Text.ToUpper() + " [ --model-- ]";
                messagelabel.Text = messagetext.Text;
                messagelabel.Visible = true;
                modellabel.Visible = false;
            }
            else
            {
                modellabel.Visible = true;
                messagelabel.Visible = false;
            }
            denge();

        }
        void denge()
        {
            if (pluscheck.Checked)
            {
                if (messagetext.Text.Length==0)
                {
                    brandlabel.Location = new Point(230 - brandlabel.Width / 2, 330);
                }
                else
                {
                    brandlabel.Location = new Point(65, 330);
                    brandlabel.Width = 335;
                }
                modellabel.Width = 335;
                modellabel.Location = new Point(65, 364);
                messagelabel.Location = new Point(230 - messagelabel.Width / 2, messagelabel.Location.Y);
                plusimage.Visible = true;
            }
            else
            {
                if (messagetext.Text.Length == 0)
                {
                    brandlabel.Location = new Point(200 - brandlabel.Width / 2, 300);
                }
                else
                {
                    brandlabel.Location = new Point(0, 400);
                    brandlabel.Width = 400;
                }
                brandlabel.Location = new Point(200 - brandlabel.Width / 2, 330);
                modellabel.Width = 400;
                modellabel.Location = new Point(0, 364);
                messagelabel.Location = new Point(200 - messagelabel.Width / 2, messagelabel.Location.Y);
                plusimage.Visible = false;
            }
        }
        private void start_Click(object sender, EventArgs e)
        {
            if (foldersavetextbox.Text.Length != 0&& brandtext.Text.Length != 0&& modeltext.Text.Length != 0&& producttext.Text.Length != 0)
            {
                try
                {
                    string infoword = "";
                    string productname = producttext.Text;
                    string brandname = brandtext.Text;
                    string modelname = modeltext.Text;
                    string messagename = messagetext.Text;

                    string inm;
                    inm = Regex.Replace(infotext.Text, @"\r\n?|\n", " ");
                    if (inm != "")
                    {
                        for (int i = 0; i < inm.Length; i++)
                        {
                            if ((i == 0 && inm[i].ToString() == " ") || (inm[i].ToString() == "x") || (inm[i].ToString() == "X"))
                            {
                                continue;
                            }
                            else
                            {
                                if (inm[i].ToString() != " ")
                                {
                                    infoword += inm[i].ToString();
                                }
                                else
                                {
                                    infoword += "-";
                                }
                            }
                        }
                        infoword += "-";
                        infoword = infoword.Substring(1, infoword.Length-1);
                    }
                    Random rnd = new Random();
                    string modelword = "";
                    for (int item = 0; item < modeltext.Text.Length; item++)
                    {

                        if (modeltext.Text[item] == ',')
                        {
                            if (messagetext.Text.Length == 0)
                            {
                                modellabel.Text = modelword;
                                denge();
                                while (modellabel.Width < System.Windows.Forms.TextRenderer.MeasureText(modellabel.Text, new Font(modellabel.Font.FontFamily, modellabel.Font.Size, modellabel.Font.Style)).Width)
                                {
                                    modellabel.Font = new Font(modellabel.Font.FontFamily, (float)modellabel.Font.Size - 0.5f, modellabel.Font.Style);
                                }
                            }
                            else
                            {
                                denge();
                                brandlabel.Text = brandtext.Text.ToUpper() + " " + modelword;
                                brandlabel.AutoSize = false;
                                brandlabel.TextAlign = ContentAlignment.MiddleCenter;
                                if (pluscheck.Checked)
                                {
                                    brandlabel.Location = new Point(65, 330);
                                    brandlabel.Width = 335;
                                }
                                else
                                {
                                    brandlabel.Location = new Point(0, 330);
                                    brandlabel.Width = 400;
                                }
                                brandlabel.Height = 37;
                                while (brandlabel.Width < System.Windows.Forms.TextRenderer.MeasureText(brandlabel.Text, new Font(brandlabel.Font.FontFamily, brandlabel.Font.Size, brandlabel.Font.Style)).Width)
                                {
                                    brandlabel.Font = new Font(brandlabel.Font.FontFamily, (float)brandlabel.Font.Size - 0.5f, brandlabel.Font.Style);
                                }
                                if (messagelabel.Height + messagelabel.Location.Y >= 400)
                                {
                                    messagelabel.Location = new Point(messagelabel.Location.X, 400 - messagelabel.Height);
                                }
                                else
                                {
                                    messagelabel.Location = new Point(messagelabel.Location.X, 365);
                                }
                            }
                            /*if (!File.Exists(foldersavetextbox.Text + "\\" + shoptext.Text + "\\" + producttext.Text + "\\" + brandtext.Text + "\\" + modelword + "\\" + shoptext.Text + "_" + producttext.Text + "_" + brandtext.Text + "_" + modelword + ".png"))
                            {*/
                            Bitmap bm = new Bitmap(panel1.Width, panel1.Height);
                            panel1.DrawToBitmap(bm, new Rectangle(0, 0, panel1.Width, panel1.Height));
                            bm = new Bitmap(bm, (int)imagex.Value, (int)imagey.Value);
                            string imagename = imagelastname((brandname + "-" + modelword + "-" + productname + "-" + infoword).ToLower());
                            bm.Save(@foldersavetextbox.Text + "\\"+ imagename + "869" + rnd.Next(11111, 99999).ToString() + rnd.Next(11111, 99999).ToString() + ".jpg", ImageFormat.Png);
                            brandlabel.Font = new Font(brandfontname.FontFamily, (float)brandsize.Value, brandfontname.Style);
                            modellabel.Font = new Font(modelfontname.FontFamily, (float)modelsize.Value, modelfontname.Style);
                            //}
                            modelword = "";
                        }
                        else
                        {
                            modelword += modeltext.Text[item].ToString();
                            if (item == (modeltext.Text.Length - 1))
                            {
                                if (messagetext.Text.Length == 0)
                                {
                                    modellabel.Text = modelword;
                                    denge();
                                    while (modellabel.Width < System.Windows.Forms.TextRenderer.MeasureText(modellabel.Text, new Font(modellabel.Font.FontFamily, modellabel.Font.Size, modellabel.Font.Style)).Width)
                                    {
                                        modellabel.Font = new Font(modellabel.Font.FontFamily, (float)modellabel.Font.Size - 0.5f, modellabel.Font.Style);
                                    }
                                }
                                else
                                {
                                    brandlabel.Text = brandtext.Text.ToUpper() + " " + modelword;
                                    denge();
                                    brandlabel.AutoSize = false;
                                    brandlabel.TextAlign = ContentAlignment.MiddleCenter;
                                    if (pluscheck.Checked)
                                    {
                                        brandlabel.Location = new Point(65, 330);
                                        brandlabel.Width = 335;
                                    }
                                    else
                                    {
                                        brandlabel.Location = new Point(0, 330);
                                        brandlabel.Width = 400;
                                    }
                                    brandlabel.Height = 37;
                                    while (brandlabel.Width < System.Windows.Forms.TextRenderer.MeasureText(brandlabel.Text, new Font(brandlabel.Font.FontFamily, brandlabel.Font.Size, brandlabel.Font.Style)).Width)
                                    {
                                        brandlabel.Font = new Font(brandlabel.Font.FontFamily, (float)brandlabel.Font.Size - 0.5f, brandlabel.Font.Style);
                                    }
                                    if (messagelabel.Height + messagelabel.Location.Y >= 400)
                                    {
                                        messagelabel.Location = new Point(messagelabel.Location.X, 400 - messagelabel.Height);
                                    }
                                    else
                                    {
                                        messagelabel.Location = new Point(messagelabel.Location.X, 365);
                                    }
                                }
                                Bitmap bm = new Bitmap(panel1.Width, panel1.Height);
                                panel1.DrawToBitmap(bm, new Rectangle(0, 0, panel1.Width, panel1.Height));
                                bm = new Bitmap(bm, (int)imagex.Value, (int)imagey.Value);
                                string imagename = imagelastname((brandname + "-" + modelword + "-" + productname + "-" + infoword).ToLower());
                                bm.Save(@foldersavetextbox.Text + "\\" + imagename + "869" + rnd.Next(11111, 99999).ToString() + rnd.Next(11111, 99999).ToString() + ".jpg", ImageFormat.Png);
                                brandlabel.Font = new Font(brandfontname.FontFamily, (float)brandsize.Value, brandfontname.Style);
                                modellabel.Font = new Font(modelfontname.FontFamily, (float)modelsize.Value, modelfontname.Style);
                            }
                        }
                    }
                    modellabel.Text = "[model]";
                    if (messagetext.Text.Length == 0)
                    {
                        brandlabel.Text = brandtext.Text;
                    }
                    else
                    {
                        brandlabel.Text = brandtext.Text.ToUpper() + " [ --model-- ]";
                    }
                    brandlabel.Font = new Font(brandfontname.FontFamily, (float)brandsize.Value, brandfontname.Style);
                    modellabel.Font = new Font(modelfontname.FontFamily, (float)modelsize.Value, modelfontname.Style);
                    denge();
                    MessageBox.Show("Bitti");
                }
                catch (Exception m)
                {
                    MessageBox.Show("Giriş birimlerini kontrol edin !", "Hata", MessageBoxButtons.OK, MessageBoxIcon.Warning);
                }
            }
            else
            {
                MessageBox.Show("Giriş birimlerini kontrol edin !","Hata", MessageBoxButtons.OK, MessageBoxIcon.Warning);
            }

        }
        public string imagelastname(string imagename)
        {
            string lastname = "";

            for (int i = 0; i < imagename.Count(); i++)
            {
                string m = imagename[i].ToString();
                if (m == " ")
                {
                    lastname += "-";
                }
                else if (m == "ş")
                {
                    lastname += "s";
                }
                else if (m == "ç")
                {
                    lastname += "c";
                }
                else if (m == "ı")
                {
                    lastname += "i";
                }
                else if (m == "ğ")
                {
                    lastname += "g";
                }
                else if (m == "ö")
                {
                    lastname += "o";
                }
                else if (m == "ü")
                {
                    lastname += "u";
                }
                else
                {
                    lastname += m;
                }

            }
            return lastname;
        }
        FontDialog selectinfocolor1 = new FontDialog();
        Font infofontname;
        private void infofont_Click(object sender, EventArgs e)
        {
            selectinfocolor1.ShowDialog();
            infofontname = selectinfocolor1.Font;
            numericUpDown3.Value = Convert.ToInt32(infofontname.Size / 4 + 2); infofontname = new Font(infofontname.FontFamily, (float)infosize.Value, infofontname.Style);
            imageshow.Image = infotextadd((int)numericUpDown1.Value, (int)numericUpDown2.Value, (int)numericUpDown3.Value, metin, dis);
           
        }
        bool available = false, filigreeavailable = false;
        public Image infotextadd(int x, int y, int width, Color infotextin, Color infotextout)
        {
            try
            {
                if (radioButton1.Checked && filigree.Checked)
                {
                    if (!filigreeavailable)
                    {
                        tempimagefiligree = new Bitmap(imageshow.Image);
                        filigreeavailable = true;
                    }
                    else
                    {
                        imageshow.Image = tempimagefiligree;
                    }
                }
                else
                {
                    if (!available)
                    {
                        tempimage = new Bitmap(imageshow.Image);
                        available = true;
                    }
                    else
                    {
                        imageshow.Image = tempimage;
                    }
                }
                Bitmap s = new Bitmap(imageshow.Image);
                Graphics graphics = Graphics.FromImage(s);
                graphics.SmoothingMode = SmoothingMode.AntiAlias;
                graphics.InterpolationMode = InterpolationMode.HighQualityBicubic;
                GraphicsPath a = new GraphicsPath();
                a.AddString(
                    infotext.Text,
                    infofontname.FontFamily,
                    (int)infofontname.Style,
                    graphics.DpiY * infofontname.Size / 72,
                    new Point(x, y),
                    new StringFormat());

                Pen pen = new Pen(infotextout, width);
                pen.LineJoin = LineJoin.Round;
                graphics.DrawPath(pen, a);
                graphics.FillPath(new SolidBrush(infotextin), a);
                graphics.Dispose();
                return s;
            }
            catch (Exception)
            {
                return imageshow.Image;
            }
        }
        private void logolefttopcheck_CheckedChanged(object sender, EventArgs e)
        {
            if (logolefttopcheck.Checked == true)
            {
                //Açık
                logolefttopxvalue.Enabled = true;
                logolefttopyvalue.Enabled = true;
                logolefttopwvalue.Enabled = true;
                logolefttophvalue.Enabled = true;
                solust.Visible = true;
            }
            else
            {
                //Kapalı
                logolefttopxvalue.Enabled = false;
                logolefttopyvalue.Enabled = false;
                logolefttopwvalue.Enabled = false;
                logolefttophvalue.Enabled = false;

                solust.Visible = false;
                logolefttopbutton.Visible = true;
            }
        }

        private void logorighttopcheck_CheckedChanged(object sender, EventArgs e)
        {
            if (logorighttopcheck.Checked == true)
            {
                //Açık
                logorighttopxvalue.Enabled = true;
                logorighttopyvalue.Enabled = true;
                logorighttopwvalue.Enabled = true;
                logorighttophvalue.Enabled = true;

                sagust.Visible = true;
            }
            else
            {
                //Kapalı
                logorighttopxvalue.Enabled = false;
                logorighttopyvalue.Enabled = false;
                logorighttopwvalue.Enabled = false;
                logorighttophvalue.Enabled = false;

                sagust.Visible = false;
                logorighttopbutton.Visible = true;
            }
        }

        private void logoleftbottomcheck_CheckedChanged(object sender, EventArgs e)
        {
            if (logoleftbottomcheck.Checked == true)
            {
                //Açık
                logoleftbottomxvalue.Enabled = true;
                logoleftbottomyvalue.Enabled = true;
                logoleftbottomwvalue.Enabled = true;
                logoleftbottomhvalue.Enabled = true;

                solalt.Visible = true;
            }
            else
            {
                //Kapalı
                logoleftbottomxvalue.Enabled = false;
                logoleftbottomyvalue.Enabled = false;
                logoleftbottomwvalue.Enabled = false;
                logoleftbottomhvalue.Enabled = false;

                solalt.Visible = false;
                logoleftbottombutton.Visible = true;
            }
        }

        private void logorightbottomcheck_CheckedChanged(object sender, EventArgs e)
        {
            if (logorightbottomcheck.Checked == true)
            {
                //Açık
                logorightbottomxvalue.Enabled = true;
                logorightbottomyvalue.Enabled = true;
                logorightbottomwvalue.Enabled = true;
                logorightbottomhvalue.Enabled = true;
                sagalt.Visible = true;
            }
            else
            {
                //Kapalı
                logorightbottomxvalue.Enabled = false;
                logorightbottomyvalue.Enabled = false;
                logorightbottomwvalue.Enabled = false;
                logorightbottomhvalue.Enabled = false;

                sagalt.Visible = false;
                logorightbottombutton.Visible = true;
            }
        }

        OpenFileDialog logolefttopbuttonpath;
        private void logolefttopbutton_Click(object sender, EventArgs e)
        {
            logolefttopbuttonpath = new OpenFileDialog();
            logolefttopbuttonpath.ShowDialog();
            filepath = logolefttopbuttonpath.FileName;
            if (filepath != "")
            {
                logolefttopcheck.Enabled = true;
                logolefttoppicture.Image = new Bitmap(filepath);
                solust.Image = new Bitmap(filepath);
                logolefttoppicture.SizeMode = PictureBoxSizeMode.StretchImage;
            }
        }

        OpenFileDialog logorigthttopbuttonpath;
        private void logorighttopbutton_Click(object sender, EventArgs e)
        {
            logorigthttopbuttonpath = new OpenFileDialog();
            logorigthttopbuttonpath.ShowDialog();
            filepath = logorigthttopbuttonpath.FileName;
            if (filepath != "")
            {
                logorighttopcheck.Enabled = true;
                logorighttoppicture.Image = new Bitmap(filepath);
                sagust.Image = new Bitmap(filepath);
                logorighttoppicture.SizeMode = PictureBoxSizeMode.StretchImage;
            }
        }

        OpenFileDialog logoleftbottombuttonpath;
        private void logoleftbottombutton_Click(object sender, EventArgs e)
        {
            logoleftbottombuttonpath = new OpenFileDialog();
            logoleftbottombuttonpath.ShowDialog();
            filepath = logoleftbottombuttonpath.FileName;
            if (filepath != "")
            {
                logoleftbottomcheck.Enabled = true;
                logoleftbottompicture.Image = new Bitmap(filepath);
                solalt.Image = new Bitmap(filepath);
                logoleftbottompicture.SizeMode = PictureBoxSizeMode.StretchImage;
            }
        }

        OpenFileDialog logorightbottombuttonpath;
        /// ///////////////////////////////////////////////////////////////////
        private void logolefttopcheck2_CheckedChanged(object sender, EventArgs e)
        {
            if (logolefttopcheck2.Checked == true)
            {
                //Açık
                logolefttopxvalue2.Enabled = true;
                logolefttopyvalue2.Enabled = true;
                logolefttopwvalue2.Enabled = true;
                logolefttophvalue2.Enabled = true;
                solust2.Visible = true;
            }
            else
            {
                //Kapalı
                logolefttopxvalue2.Enabled = false;
                logolefttopyvalue2.Enabled = false;
                logolefttopwvalue2.Enabled = false;
                logolefttophvalue2.Enabled = false;

                solust2.Visible = false;
                logolefttopbutton2.Visible = true;
            }
        }

        private void logorighttopcheck2_CheckedChanged(object sender, EventArgs e)
        {
            if (logorighttopcheck2.Checked == true)
            {
                //Açık
                logorighttopxvalue2.Enabled = true;
                logorighttopyvalue2.Enabled = true;
                logorighttopwvalue2.Enabled = true;
                logorighttophvalue2.Enabled = true;

                sagust2.Visible = true;
            }
            else
            {
                //Kapalı
                logorighttopxvalue2.Enabled = false;
                logorighttopyvalue2.Enabled = false;
                logorighttopwvalue2.Enabled = false;
                logorighttophvalue2.Enabled = false;

                sagust2.Visible = false;
                logorighttopbutton2.Visible = true;
            }
        }

        private void logoleftbottomcheck2_CheckedChanged(object sender, EventArgs e)
        {
            if (logoleftbottomcheck2.Checked == true)
            {
                //Açık
                logoleftbottomxvalue2.Enabled = true;
                logoleftbottomyvalue2.Enabled = true;
                logoleftbottomwvalue2.Enabled = true;
                logoleftbottomhvalue2.Enabled = true;

                solalt2.Visible = true;
            }
            else
            {
                //Kapalı
                logoleftbottomxvalue2.Enabled = false;
                logoleftbottomyvalue2.Enabled = false;
                logoleftbottomwvalue2.Enabled = false;
                logoleftbottomhvalue2.Enabled = false;

                solalt2.Visible = false;
                logoleftbottombutton2.Visible = true;
            }
        }

        private void logorightbottomcheck2_CheckedChanged(object sender, EventArgs e)
        {
            if (logorightbottomcheck2.Checked == true)
            {
                //Açık
                logorightbottomxvalue2.Enabled = true;
                logorightbottomyvalue2.Enabled = true;
                logorightbottomwvalue2.Enabled = true;
                logorightbottomhvalue2.Enabled = true;
                sagalt2.Visible = true;
            }
            else
            {
                //Kapalı
                logorightbottomxvalue2.Enabled = false;
                logorightbottomyvalue2.Enabled = false;
                logorightbottomwvalue2.Enabled = false;
                logorightbottomhvalue2.Enabled = false;

                sagalt2.Visible = false;
                logorightbottombutton2.Visible = true;
            }
        }

        OpenFileDialog logolefttopbuttonpath2;
        private void logolefttopbutton2_Click(object sender, EventArgs e)
        {
            logolefttopbuttonpath2 = new OpenFileDialog();
            logolefttopbuttonpath2.ShowDialog();
            filepath = logolefttopbuttonpath2.FileName;
            if (filepath != "")
            {
                logolefttopcheck2.Enabled = true;
                logolefttoppicture2.Image = new Bitmap(filepath);
                solust2.Image = new Bitmap(filepath);
                logolefttoppicture2.SizeMode = PictureBoxSizeMode.StretchImage;
            }
        }

        OpenFileDialog logorigthttopbuttonpath2;
        private void logorighttopbutton2_Click(object sender, EventArgs e)
        {
            logorigthttopbuttonpath2 = new OpenFileDialog();
            logorigthttopbuttonpath2.ShowDialog();
            filepath = logorigthttopbuttonpath2.FileName;
            if (filepath != "")
            {
                logorighttopcheck2.Enabled = true;
                logorighttoppicture2.Image = new Bitmap(filepath);
                sagust2.Image = new Bitmap(filepath);
                logorighttoppicture2.SizeMode = PictureBoxSizeMode.StretchImage;
            }
        }

        OpenFileDialog logoleftbottombuttonpath2;
        private void logoleftbottombutton2_Click(object sender, EventArgs e)
        {
            logoleftbottombuttonpath2 = new OpenFileDialog();
            logoleftbottombuttonpath2.ShowDialog();
            filepath = logoleftbottombuttonpath2.FileName;
            if (filepath != "")
            {
                logoleftbottomcheck2.Enabled = true;
                logoleftbottompicture2.Image = new Bitmap(filepath);
                solalt2.Image = new Bitmap(filepath);
                logoleftbottompicture2.SizeMode = PictureBoxSizeMode.StretchImage;
            }
        }

        OpenFileDialog logorightbottombuttonpath2;


        FontDialog selectmessagecolor1 = new FontDialog();
        Font messagefontname;
        Color messagefontcolor;
        private void messagefont_Click(object sender, EventArgs e)
        {
            selectmessagecolor1.ShowDialog();
            messagefontname = selectmessagecolor1.Font;
            messagefontcolor = messagecolor.BackColor;
            messagelabel.Text = messagetext.Text;
            messagelabel.Font = messagefontname;
            messagelabel.ForeColor = messagefontcolor;

            denge();
            if (messagetext.Text != "")
            {
                messagelabel.Visible = true;
                messagesize_ValueChanged(sender, e);
            }
            if (messagelabel.Height + messagelabel.Location.Y >= 400)
            {
                messagelabel.Location = new Point(200 - messagelabel.Width / 2, 400 - messagelabel.Height);
            }
            else
            {
                messagelabel.Location = new Point((400 / 2) - messagelabel.Width / 2, 365);
            }
        }
        ColorDialog cd = new ColorDialog();
        Color metin = Color.Yellow, dis = Color.Blue;
        private void infocolor1_Click(object sender, EventArgs e)
        {
            cd.ShowDialog();
            metin = cd.Color;
            imageshow.Image = infotextadd((int)numericUpDown1.Value, (int)numericUpDown2.Value, (int)numericUpDown3.Value, metin, dis);
        }

        private void numericUpDown1_ValueChanged(object sender, EventArgs e)
        {

            imageshow.Image = infotextadd((int)numericUpDown1.Value, (int)numericUpDown2.Value, (int)numericUpDown3.Value, metin, dis);
        }

        private void numericUpDown2_ValueChanged(object sender, EventArgs e)
        {

            imageshow.Image = infotextadd((int)numericUpDown1.Value, (int)numericUpDown2.Value, (int)numericUpDown3.Value, metin, dis);
        }

        private void numericUpDown3_ValueChanged(object sender, EventArgs e)
        {

            imageshow.Image = infotextadd((int)numericUpDown1.Value, (int)numericUpDown2.Value, (int)numericUpDown3.Value, metin, dis);
        }

        private void infocolor2_Click(object sender, EventArgs e)
        {
            cd.ShowDialog();
            dis = cd.Color;
            imageshow.Image = infotextadd((int)numericUpDown1.Value, (int)numericUpDown2.Value, (int)numericUpDown3.Value, metin, dis);
        }

        private void pluscheck_CheckedChanged(object sender, EventArgs e)
        {
            denge();
        }

        private void infotext_TextChanged(object sender, EventArgs e)
        {
            if (infotext.Text.Length != 0)
            {
                try
                {
                    imageshow.Image = infotextadd((int)numericUpDown1.Value, (int)numericUpDown2.Value, (int)numericUpDown3.Value, metin, dis);
                }
                catch (Exception)
                {
                }
            }
            else
            {
                imageshow.Image = tempimage;
            }
        }

        private void checkBox1_CheckedChanged(object sender, EventArgs e)
        {
            if (kargocheck.Checked)
            {
                kargokargo.Visible = true;
            }
            else
            {
                kargokargo.Visible = false;
            }
        }

        private void messagetext_TextChanged(object sender, EventArgs e)
        {
            if (messagetext.Text.Length != 0)
            {
                
                brandlabel.Text = brandtext.Text.ToUpper() + " [ --model-- ]";
                messagelabel.Text = messagetext.Text;
                brandlabel.AutoSize = false;
                brandlabel.TextAlign = ContentAlignment.MiddleCenter;
                if (pluscheck.Checked)
                {
                    brandlabel.Location = new Point(65, 330);
                    brandlabel.Width = 335;
                }
                else
                {
                    brandlabel.Location = new Point(0, 330);
                    brandlabel.Width = 400;
                }
                brandlabel.Height = 37;
                messagesize_ValueChanged(sender, e);
                denge();
                if (messagelabel.Height + messagelabel.Location.Y >= 400)
                {
                    messagelabel.Location = new Point(messagelabel.Location.X, 400 - messagelabel.Height);
                }
                else
                {
                    messagelabel.Location = new Point(messagelabel.Location.X, 365);
                }
                messagelabel.Visible = true;
                modellabel.Visible = false;
            }
            else
            {
                brandlabel.Text = brandtext.Text;
                brandlabel.AutoSize = true;
                brandlabel.Location = new Point(137, 330);
                if (checkBox1.Checked)
                {
                    modellabel.Visible = true;
                }
                messagelabel.Visible = false;
                denge();
            }
        }
        int imgwidth, imgheight;
        private void Form1_Load(object sender, EventArgs e)
        {
            solalt.Parent = imageshow;
            solust.Parent = imageshow;
            sagust.Parent = imageshow;
            sagalt.Parent = imageshow;
            solalt2.Parent = imageshow;
            solust2.Parent = imageshow;
            sagust2.Parent = imageshow;
            sagalt2.Parent = imageshow;
            filigranimage.Parent = imageshow;
            kargokargo.Parent = imageshow;
            messagelabel.Text = "asd";
            imgwidth = 400;
            imgheight =400;
        }
        private void rim_CheckedChanged(object sender, EventArgs e)
        {
            if (rim.Checked == true)
            {
                panel2.Width = imgwidth - (int)rimsize.Value * 2;
                if (checkBox1.Checked)
                {
                    panel2.Height = imgheight - (int)rimsize.Value;
                    panel2.Location = new Point(200 - panel2.Width / 2, (int)rimsize.Value);
                }
                else
                {
                    panel2.Height = imgheight - (int)rimsize.Value * 2;
                    panel2.Location = new Point(200 - panel2.Width / 2, (int)rimsize.Value);
                }
            }
            if (rim.Checked == false)
            {
                panel2.Width = 400;
                if (!checkBox1.Checked)
                {
                    panel2.Height = 400;
                }
                else
                {
                    panel2.Height = 330;
                }
                panel2.Location = new Point(0, 0);
            }
            kargokargo.Location = new Point(0, panel2.Height - kargokargo.Height);
        }

        private void logolefttopxvalue_ValueChanged(object sender, EventArgs e)
        {
            solust.Location = new Point((int)logolefttopxvalue.Value, (int)logolefttopyvalue.Value);
        }

        private void logolefttopyvalue_ValueChanged(object sender, EventArgs e)
        {

            solust.Location = new Point((int)logolefttopxvalue.Value, (int)logolefttopyvalue.Value);
        }

        private void logolefttopwvalue_ValueChanged(object sender, EventArgs e)
        {
            solust.Width = (int)logolefttopwvalue.Value;
        }

        private void logolefttophvalue_ValueChanged(object sender, EventArgs e)
        {
            solust.Height = (int)logolefttophvalue.Value;
        }
        //sağüst
        private void logorighttopxvalue_ValueChanged(object sender, EventArgs e)
        {
            sagust.Location = new Point((int)logorighttopxvalue.Value, (int)logorighttopyvalue.Value);
        }

        private void logorighttopyvalue_ValueChanged(object sender, EventArgs e)
        {

            sagust.Location = new Point((int)logorighttopxvalue.Value, (int)logorighttopyvalue.Value);
        }

        private void logorighttopwvalue_ValueChanged(object sender, EventArgs e)
        {
            sagust.Width = (int)logorighttopwvalue.Value;
        }

        private void logorighttophvalue_ValueChanged(object sender, EventArgs e)
        {
            sagust.Height = (int)logorighttophvalue.Value;
        }
        //solalt
        private void logoleftbottomxvalue_ValueChanged(object sender, EventArgs e)
        {
            solalt.Location = new Point((int)logoleftbottomxvalue.Value, (int)logoleftbottomyvalue.Value);
        }

        private void logoleftbottomyvalue_ValueChanged(object sender, EventArgs e)
        {

            solalt.Location = new Point((int)logoleftbottomxvalue.Value, (int)logoleftbottomyvalue.Value);
        }

        private void logoleftbottomwvalue_ValueChanged(object sender, EventArgs e)
        {
            solalt.Width = (int)logoleftbottomwvalue.Value;
        }

        private void logoleftbottomhvalue_ValueChanged(object sender, EventArgs e)
        {
            solalt.Height = (int)logoleftbottomhvalue.Value;
        }
        //sağalt
        private void logorightbottomxvalue_ValueChanged(object sender, EventArgs e)
        {
            sagalt.Location = new Point((int)logorightbottomxvalue.Value, (int)logorightbottomyvalue.Value);
        }

        private void logorightbottomyvalue_ValueChanged(object sender, EventArgs e)
        {

            sagalt.Location = new Point((int)logorightbottomxvalue.Value, (int)logorightbottomyvalue.Value);
        }

        private void logorightbottomwvalue_ValueChanged(object sender, EventArgs e)
        {
            sagalt.Width = (int)logorightbottomwvalue.Value;
        }

        private void logorightbottomhvalue_ValueChanged(object sender, EventArgs e)
        {
            sagalt.Height = (int)logorightbottomhvalue.Value;
        }
        //----------

        private void logolefttopxvalue2_ValueChanged(object sender, EventArgs e)
        {
            solust2.Location = new Point((int)logolefttopxvalue2.Value, (int)logolefttopyvalue2.Value);
        }

        private void logolefttopyvalue2_ValueChanged(object sender, EventArgs e)
        {

            solust2.Location = new Point((int)logolefttopxvalue2.Value, (int)logolefttopyvalue2.Value);
        }

        private void logolefttopwvalue2_ValueChanged(object sender, EventArgs e)
        {
            solust2.Width = (int)logolefttopwvalue2.Value;
        }

        private void logolefttophvalue2_ValueChanged(object sender, EventArgs e)
        {
            solust2.Height = (int)logolefttophvalue2.Value;
        }
        //sağüst
        private void logorighttopxvalue2_ValueChanged(object sender, EventArgs e)
        {
            sagust2.Location = new Point((int)logorighttopxvalue2.Value, (int)logorighttopyvalue2.Value);
        }

        private void logorighttopyvalue2_ValueChanged(object sender, EventArgs e)
        {

            sagust2.Location = new Point((int)logorighttopxvalue2.Value, (int)logorighttopyvalue2.Value);
        }

        private void logorighttopwvalue2_ValueChanged(object sender, EventArgs e)
        {
            sagust2.Width = (int)logorighttopwvalue2.Value;
        }

        private void logorighttophvalue2_ValueChanged(object sender, EventArgs e)
        {
            sagust2.Height = (int)logorighttophvalue2.Value;
        }
        //solalt
        private void logoleftbottomxvalue2_ValueChanged(object sender, EventArgs e)
        {
            solalt2.Location = new Point((int)logoleftbottomxvalue2.Value, (int)logoleftbottomyvalue2.Value);
        }

        private void logoleftbottomyvalue2_ValueChanged(object sender, EventArgs e)
        {

            solalt2.Location = new Point((int)logoleftbottomxvalue2.Value, (int)logoleftbottomyvalue2.Value);
        }

        private void logoleftbottomwvalue2_ValueChanged(object sender, EventArgs e)
        {
            solalt2.Width = (int)logoleftbottomwvalue2.Value;
        }

        private void logoleftbottomhvalue2_ValueChanged(object sender, EventArgs e)
        {
            solalt2.Height = (int)logoleftbottomhvalue2.Value;
        }
        //sağalt
        private void logorightbottomxvalue2_ValueChanged(object sender, EventArgs e)
        {
            sagalt2.Location = new Point((int)logorightbottomxvalue2.Value, (int)logorightbottomyvalue2.Value);
        }

        private void logorightbottomyvalue2_ValueChanged(object sender, EventArgs e)
        {

            sagalt2.Location = new Point((int)logorightbottomxvalue2.Value, (int)logorightbottomyvalue2.Value);
        }

        private void logorightbottomwvalue2_ValueChanged(object sender, EventArgs e)
        {
            sagalt2.Width = (int)logorightbottomwvalue2.Value;
        }

        private void logorightbottomhvalue2_ValueChanged(object sender, EventArgs e)
        {
            sagalt2.Height = (int)logorightbottomhvalue2.Value;
        }

        //---------
        private void button1_Click(object sender, EventArgs e)
        {
            ColorDialog color = new ColorDialog();
            color.ShowDialog();
            panel1.BackColor = color.Color;
            modellabel.BackColor = color.Color;
            brandlabel.BackColor = color.Color;
            messagelabel.BackColor = color.Color;
        }

        private void filigree_CheckedChanged(object sender, EventArgs e)
        {
            if (filigree.Checked)
            {
                radioButton1.Enabled = true;
                radioButton2.Enabled = true;
                if (radioButton1.Checked)
                {
                    radioButton1_CheckedChanged(sender, e);
                }
                else if (radioButton2.Checked)
                {
                    radioButton2_CheckedChanged(sender, e);
                }
            }
            else
            {
                groupBox12.Enabled = false;
                radioButton1.Enabled = false;
                radioButton2.Enabled = false;
                imageshow.Image = tempimage;
                filigranimage.Visible = false;
                solalt.Parent = imageshow;
                solust.Parent = imageshow;
                sagust.Parent = imageshow;
                sagalt.Parent = imageshow;
                solalt2.Parent = imageshow;
                solust2.Parent = imageshow;
                sagust2.Parent = imageshow;
                sagalt2.Parent = imageshow;
                imageshow.Image = tempimage;
                if (infotext.Text.Length != 0)
                {
                    try
                    {
                        imageshow.Image = infotextadd((int)numericUpDown1.Value, (int)numericUpDown2.Value, (int)numericUpDown3.Value, metin, dis);
                    }
                    catch (Exception)
                    {
                    }
                }
            }
        }
        string kargoyol;
        private void kargo_Click(object sender, EventArgs e)
        {
            OpenFileDialog file = new OpenFileDialog();
            file.ShowDialog();
            kargoyol = file.FileName;
            kargokargo.Image = new Bitmap(kargoyol);
        }

        private void brandtext_SelectedIndexChanged(object sender, EventArgs e)
        {

            denge();
        }

        private void modeltext_TextChanged(object sender, EventArgs e)
        {
            if (messagetext.Text == "")
            {
                denge();
            }
        }

        private void button2_Click(object sender, EventArgs e)
        {

            OpenFileDialog fili = new OpenFileDialog();
            fili.ShowDialog();
            filepath = fili.FileName;
            if (filepath != "")
            {
                filigranimage.Image = new Bitmap(filepath);
                filigranimage.SizeMode = PictureBoxSizeMode.StretchImage;
            }
        }

        private void radioButton1_CheckedChanged(object sender, EventArgs e)
        {
            filigranimage.Visible = false;
            groupBox12.Enabled = false;
            filigreeavailable = false;
            solalt.Parent = imageshow;
            solust.Parent = imageshow;
            sagust.Parent = imageshow;
            sagalt.Parent = imageshow;
            solalt2.Parent = imageshow;
            solust2.Parent = imageshow;
            sagust2.Parent = imageshow;
            sagalt2.Parent = imageshow;
            kargokargo.Parent = imageshow;
            int punto = 20;
            int opacity = 80;
            string text = shoptext.Text;
            Bitmap bmp = new Bitmap(tempimage);
            Graphics g = Graphics.FromImage(bmp);
            g.RotateTransform(-45);
            int x = -500;
            int y = 0;
            int z = -400;
            for (int i = 0; i < 200; i++)
            {
                g.DrawString(text, new Font("Arial Black", punto), new SolidBrush(Color.FromArgb(opacity, Color.Gray)), x, y);
                if (i % 10 == 0)
                {
                    x = z;
                    y += 100 + punto + text.Length;
                    z += 100;
                }
                else
                {
                    x += (punto * 96 / 72) * text.Length;
                }
            }
            imageshow.Image = bmp;
            tempimagefiligree = bmp;
            if (infotext.Text.Length != 0)
            {
                try
                {
                    imageshow.Image = infotextadd((int)numericUpDown1.Value, (int)numericUpDown2.Value, (int)numericUpDown3.Value, metin, dis);
                }
                catch (Exception)
                {
                }
            }
        }

        private void radioButton2_CheckedChanged(object sender, EventArgs e)
        {
            filigranimage.Visible = true;
            groupBox12.Enabled = true;
            filigreeavailable = false;
            imageshow.Image = tempimage;
            solalt.Parent = filigranimage;
            solust.Parent = filigranimage;
            sagust.Parent = filigranimage;
            sagalt.Parent = filigranimage;
            solalt2.Parent = filigranimage;
            solust2.Parent = filigranimage;
            sagust2.Parent = filigranimage;
            sagalt2.Parent = filigranimage;
            kargokargo.Parent = filigranimage;
            if (infotext.Text.Length != 0)
            {
                try
                {
                    imageshow.Image = infotextadd((int)numericUpDown1.Value, (int)numericUpDown2.Value, (int)numericUpDown3.Value, metin, dis);
                }
                catch (Exception)
                {
                }
            }
        }

        private void brandcolor_Click(object sender, EventArgs e)
        {
            cd.ShowDialog();
            brandcolor.BackColor = cd.Color;
            brandlabel.ForeColor = cd.Color;
        }

        private void modelcolor_Click(object sender, EventArgs e)
        {
            cd.ShowDialog();
            modelcolor.BackColor = cd.Color;
            modellabel.ForeColor = cd.Color;
        }

        private void messagecolor_Click(object sender, EventArgs e)
        {
            cd.ShowDialog();
            messagecolor.BackColor = cd.Color;
            messagelabel.ForeColor = cd.Color;
        }
        private void brandsize_ValueChanged(object sender, EventArgs e)
        {
            brandlabel.Font = new Font(brandlabel.Font.FontFamily, (float)brandsize.Value, brandlabel.Font.Style);

            denge();

        }
        private void modelsize_ValueChanged(object sender, EventArgs e)
        {
            modellabel.Font = new Font(modellabel.Font.FontFamily, (float)modelsize.Value, modellabel.Font.Style);

            denge();

        }
        private void messagesize_ValueChanged(object sender, EventArgs e)
        {
            messagelabel.Font = new Font(messagelabel.Font.FontFamily, (float)messagesize.Value, messagelabel.Font.Style);
            if (messagetext.Text != "")
            {
                denge();
            }

        }

        private void infosize_ValueChanged(object sender, EventArgs e)
        {
            try
            {
                if (infotext.Text != "")
                {
                    infofontname = new Font(infofontname.FontFamily, (float)infosize.Value, infofontname.Style);
                    if (radioButton1.Checked && filigree.Checked)
                    {
                        if (!filigreeavailable)
                        {
                            tempimagefiligree = new Bitmap(imageshow.Image);
                            filigreeavailable = true;
                        }
                        else
                        {
                            imageshow.Image = tempimagefiligree;
                        }
                    }
                    else
                    {
                        if (!available)
                        {
                            tempimage = new Bitmap(imageshow.Image);
                            available = true;
                        }
                        else
                        {
                            imageshow.Image = tempimage;
                        }
                    }
                    Bitmap s = new Bitmap(imageshow.Image);
                    Graphics graphics = Graphics.FromImage(s);
                    graphics.SmoothingMode = SmoothingMode.AntiAlias;
                    graphics.InterpolationMode = InterpolationMode.HighQualityBicubic;
                    GraphicsPath a = new GraphicsPath();
                    a.AddString(
                        infotext.Text,
                        infofontname.FontFamily,
                        (int)infofontname.Style,
                        graphics.DpiY * infofontname.Size / 72,
                        new Point((int)numericUpDown1.Value, (int)numericUpDown2.Value),
                        new StringFormat());

                    Pen pen = new Pen(dis, (int)numericUpDown3.Value);
                    pen.LineJoin = LineJoin.Round;
                    graphics.DrawPath(pen, a);
                    graphics.FillPath(new SolidBrush(metin), a);
                    graphics.Dispose();
                    imageshow.Image = s;
                }
            }
            catch (Exception)
            {

            }
        }

        private void radioButton3_CheckedChanged(object sender, EventArgs e)
        {
            filigranimage.Image = WindowsFormsApp1.Properties.Resources.filigran;
        }

        private void radioButton4_CheckedChanged(object sender, EventArgs e)
        {
            filigranimage.Image = WindowsFormsApp1.Properties.Resources.uyumlufiligran;
        }

        private void checkBox1_CheckedChanged_1(object sender, EventArgs e)
        {
            if (checkBox1.Checked)
            {
                imgwidth = 400;
                imgheight = 330;
                brandlabel.Visible = true;
                if (messagetext.Text.Length!=0)
                {
                    messagelabel.Visible = true;
                }
                else
                {
                    modellabel.Visible = true;
                }
                if (rim.Checked)
                {
                    rim_CheckedChanged(sender, e);
                }
                else
                {
                    panel2.Height = 330;
                }
                if (messagetext.Text.Length != 0)
                {
                    messagelabel.Visible = true;
                }
            }
            else
            {
                if (rim.Checked)
                {
                    panel2.Height = 400 - (int)rimsize.Value * 2;
                    panel2.Location = new Point(200 - panel2.Width / 2, (int)rimsize.Value);
                }
                else
                {
                    panel2.Height = 400;
                }
                modellabel.Visible = false;
                brandlabel.Visible = false;
                messagelabel.Visible = false;                imgwidth = 400;
                imgheight = 400;
            }
            kargokargo.Location = new Point(0, panel2.Height - kargokargo.Height);
        }

        private void imagex_ValueChanged(object sender, EventArgs e)
        {
            if (!checkBox1.Checked)
            {
                imagey.Value = Convert.ToInt32(Convert.ToInt32(imagex.Value) * 1.15);
            }
        }

        private void brandlabel_Click(object sender, EventArgs e)
        {

        }

        private void modellabel_Click(object sender, EventArgs e)
        {

        }

        private void shoptext_SelectedIndexChanged(object sender, EventArgs e)
        {
            if (filigree.Checked && radioButton1.Checked)
            {
                radioButton1_CheckedChanged(sender, e);
            }
        }


        private void rimsize_ValueChanged(object sender, EventArgs e)
        {
            if (rim.Checked == true)
            {
                panel2.Width = imgwidth - (int)rimsize.Value * 2;
                if (checkBox1.Checked)
                {
                    panel2.Height = imgheight - (int)rimsize.Value;
                    panel2.Location = new Point(200 - panel2.Width / 2, (int)rimsize.Value);
                }
                else
                {
                    panel2.Height = imgheight - (int)rimsize.Value * 2;
                    panel2.Location = new Point(200 - panel2.Width / 2,(int)rimsize.Value);
                }
                kargokargo.Location = new Point(0, imageshow.Height - kargokargo.Height);
            }
        }
        private void logorightbottombutton_Click(object sender, EventArgs e)
        {
            logorightbottombuttonpath = new OpenFileDialog();
            logorightbottombuttonpath.ShowDialog();
            filepath = logorightbottombuttonpath.FileName;
            if (filepath != "")
            {
                logorightbottomcheck.Enabled = true;
                logorightbottompicture.Image = new Bitmap(filepath);
                sagalt.Image = new Bitmap(filepath);
                logorightbottompicture.SizeMode = PictureBoxSizeMode.StretchImage;
            }
        }
        private void logorightbottombutton2_Click(object sender, EventArgs e)
        {
            logorightbottombuttonpath2 = new OpenFileDialog();
            logorightbottombuttonpath2.ShowDialog();
            filepath = logorightbottombuttonpath2.FileName;
            if (filepath != "")
            {
                logorightbottomcheck2.Enabled = true;
                logorightbottompicture2.Image = new Bitmap(filepath);
                sagalt2.Image = new Bitmap(filepath);
                logorightbottompicture2.SizeMode = PictureBoxSizeMode.StretchImage;
            }
        }
    }
}
