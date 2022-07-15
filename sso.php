<?php include_once 'inc/base.inc.php' ?>

<body id="page-top">
    <header class="mastheadSso">
        <div class="container px-4 px-lg-5 d-flex h-100 align-items-center justify-content-center" style="position: relative;top: -120px;">
            <div class="d-flex justify-content-center">
                <div class="text-center">
                    <h1 id="sso" class="writeJ mx-auto my-0 text-uppercase"></h1>
                    <img class="wow animate__animated animate__shakeY animate__infinite" data-wow-delay="9s" src="./resources/assets/img/duck.png" alt="Duck" width="10%">
                    <h2 class="text-white-50 mx-auto mt-2 mb-5">Console.WriteLine("PPE3");</h2>
                    <a class="btn btn-primary" href="#aPropos">C'est parti</a>
                </div>
            </div>
        </div>
    </header>
    <section class="about-section text-center" id="aPropos">
        <div class="container px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col-lg-8">
                    <div style="margin: 2%">
                        <h2 class="text-white mb-4 wow animate__animated animate__backInLeft">SSO</h2>
                        <i class="fas fa-info fa-2x mb-2 text-white wow animate__animated animate__backInRight"></i>
                    </div>
                    <p class="text-white-50 wow animate__animated animate__backInLeft">
                        SSO est une application logicielle permettant aux dockers et chefs de ports de gérer leurs conteneurs.
                    </p>
                </div>
            </div>
        </div>
    </section>
    <section class="projects-section bg-light" id="projets">
        <div class="container px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 justify-content-center text-center">
                <div class="col-lg-8" style="margin: 2%">
                    <h2 class="text-black mb-4 wow animate__animated animate__bounceIn">Ce que j'ai fait</h2>
                    <i class="fas fa-cog fa-2x mb-2 text-black wow animate__animated animate__bounceIn"></i>
                </div>
            </div>
            <div class="row gx-0 mb-4 mb-lg-5 align-items-center">
                <div class="col-xl-8 col-lg-7">
                    <img width="100%" src="./resources/assets/img/Sso/authentification.png" alt="Form fenêtre Authentification">
                </div>
                <div class="col-xl-4 col-lg-5">
                    <div class="featured-text text-center text-lg-left">
                        <h4 class="text-black">SSO.</h4>
                        <p class="mb-0 text-black-50">Ce logiciel développé en c# avec Windows Form du framework .NET devait permettre aux employers d'un port de gérer les incidents
                            survenus sur des conteneurs. L'authentification se fait grâce à des requêtes LDAP sur le serveur de l'entreprise.
                        </p>
                    </div>
                </div>
            </div>
            <div class="row gx-0 mb-5 mb-lg-0 justify-content-center">
                <div class="col-lg-6">
                    <div class="bg-white text-center h-100 project">
                        <div class="d-flex h-100">
                            <div class="project-text w-100 my-auto text-center text-lg-left">
                                <h4>User Control.</h4>
                                <p class="text-black-50 mb-0">Les users controls sont des objets du framework permettant de naviguer dans une application sans changer de fenêtre.</p>
                                <a target="_blank" class="text-black-50 mb-0" href="https://docs.microsoft.com/fr-fr/dotnet/api/system.windows.controls.usercontrol?view=windowsdesktop-6.0#:~:text=Un%20UserControl%20est%20un%20ContentControl,informations%2C%20consultez%20la%20classe%20ContentControl.">En savoir plus</a>
                                <hr class="d-none d-lg-block mb-0 ms-0" />
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <img width="100%" src="./resources/assets/img/Sso/userControl.png" alt="User Control">
                </div>
            </div>
            <div class="col-xl-12 col-lg-12">
                <div class="featured-text text-center text-lg-left">
                    <h4 class="text-black">Exemple d'un user control.</h4>
                    <p class="mb-0 text-black-50"></p>
                    <pre>
                    <code class="language-csharp hljs">
public partial class UserControlContainer : UserControl
    {
        string cType = "";
        bool update = false;
        string temp;
        int cNum;
        int index;
        string cProblem = "";
        DateTime dateAchatContainer;
        DateTime dateLastInspection;
        List Containers c = new List Containers();
        List int listNum = new List int();
        List string listType = new List string();
        List string listProblem = new List string();
        List DateTime listDateAchat = new List DateTime();
        List DateTime listDateLastInspection = new List DateTime();
        public UserControlContainer()
        {
            InitializeComponent();
        }

        private void UserControlContainer_Load(object sender, EventArgs e)
        {
            comboBoxNameContainer.DisplayMember = "Text";
            comboBoxNameContainer.ValueMember = "libelleContainer";
            c = Containers.getAllContainers();

            foreach (Containers comp in c)
            {
                cNum = comp.NumContainer;
                cType = comp.TypeContainer;
                cProblem = comp.LibelleProbleme;
                dateAchatContainer = comp.DateAchat;
                dateLastInspection = comp.DateDerniereInsp;
                listNum.Add(cNum);
                listType.Add(cType);
                listProblem.Add(cProblem);
                listDateAchat.Add(dateAchatContainer);
                listDateLastInspection.Add(dateLastInspection);
            }

            //comboBoxNameContainer.Text = con.NumContainer.ToString();
            comboBoxNameContainer.DataSource = listNum;
            comboBoxProbleme.DataSource = listProblem;
        }

        private void comboBoxNameContainer_SelectedIndexChanged(object sender, EventArgs e)
        {
            index = comboBoxNameContainer.SelectedIndex;
            textBoxTypeContainer.Text = listType[index];
            comboBoxProbleme.Text = listProblem[index];
            dateTimePickerAchat.Value = listDateAchat[index];
            dateTimePickerLastInspection.Value = listDateLastInspection[index];
        }

        private void ButtonUpdate_Click(object sender, EventArgs e)
        {
            update = false;
            cType = textBoxTypeContainer.Text;
            cProblem = comboBoxProbleme.Text;
            dateAchatContainer = dateTimePickerAchat.Value = listDateAchat[index];
            dateLastInspection = dateTimePickerLastInspection.Value = listDateLastInspection[index];
            temp = comboBoxNameContainer.Text;
            cNum = Convert.ToInt32(temp);
            update = Containers.updateTable(dateAchatContainer, cType, dateLastInspection, cProblem, cNum);
            this.Controls.Clear();

            UserControlContainer c = new UserControlContainer();
            this.Controls.Add(c);

            if(update == true)
            {
                MessageBox.Show("Le container a été mis à jour");
            }
            else
            {
                MessageBox.Show("Une erreur est survenue");
            }


        }

        private void button1_Click(object sender, EventArgs e)
        {
            update = false;
            temp = comboBoxNameContainer.Text;
            cNum = Convert.ToInt32(temp);
            update = Containers.deleteContainer(cNum);
            this.Controls.Clear();
            UserControlContainer c = new UserControlContainer();
            this.Controls.Add(c);
            if (update == true)
            {
                MessageBox.Show("Le container a été supprimé");
            }
            else
            {
                MessageBox.Show("Une erreur est survenue");
            }
        }

        private void button2_Click(object sender, EventArgs e)
        {
            this.Controls.Clear();
            UserControlAtelier c = new UserControlAtelier();
            UserControlAtelier.numContainer = comboBoxNameContainer.Text;
            UserControlAtelier.problemContainer = comboBoxProbleme.Text; ;
            this.Controls.Add(c);
            
        }
    }
                    </code>
                </pre>
                </div>
            </div>
            <div class="row gx-0 mb-5 mb-lg-0 justify-content-center">
                <div class="col-lg-6">
                    <img width="100%" src="./resources/assets/img/Sso/fenetre.png" alt="Fenêtre class">
                </div>
                <div class="col-lg-6">
                    <div class="bg-white text-center h-100 project">
                        <div class="d-flex h-100">
                            <div class="project-text w-100 my-auto text-center text-lg-left">
                                <h4>Fenêtres.</h4>
                                <p class="text-black-50 mb-0">Pour naviguer dans l'application, nous avons aussi mis en place des fenêtres.</p>
                                <a class="text-black-50 mb-0" target="_blank" href="https://docs.microsoft.com/fr-fr/dotnet/api/system.windows.forms.form?view=windowsdesktop-6.0">En savoir plus.</a>
                                <hr class="d-none d-lg-block mb-0 ms-0" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-12 col-lg-12">
                <div class="featured-text text-center text-lg-left">
                    <h4 class="text-black">Exemple d'une fenêtre permettant aux chefs de gérer les conteneurs.</h4>
                    <p class="mb-0 text-black-50"></p>
                    <pre>
                    <code class="language-csharp hljs">
public partial class FormChef : Form
    {
        public string userName;
        public FormChef()
        {
            InitializeComponent();
        }

        private void buttonQuitter_Click(object sender, EventArgs e)
        {
            Application.Exit();
        }
        private void buttonMaximize_Click(object sender, EventArgs e)
        {
            if (MinimizeBox)
            {
                this.WindowState = System.Windows.Forms.FormWindowState.Maximized;
                buttonMaximize.Visible = false;
            }
        }

        private void buttonMinimize_Click(object sender, EventArgs e)
        {
            if (MaximizeBox)
            {
                this.WindowState = System.Windows.Forms.FormWindowState.Normal;
                buttonMaximize.Visible = true;
            }
        }

        private void buttonReduce_Click(object sender, EventArgs e)
        {
            this.WindowState = System.Windows.Forms.FormWindowState.Minimized;
        }


        private void buttonDeconnexion_Click(object sender, EventArgs e)
        {
            FormFenetreAuthentification plouf = new FormFenetreAuthentification();
            plouf.Show();
            this.Hide();

        }

        private bool dragging = false;
        private Point dragCursorPoint;
        private Point dragFromPoint;

        private void panelButton_MouseDown(object sender, MouseEventArgs e)
        {
            dragging = true;
            dragCursorPoint = Cursor.Position;
            dragFromPoint = this.Location;
        }

        private void panelButton_MouseMove(object sender, MouseEventArgs e)
        {
            if (dragging)
            {
                Point dif = Point.Subtract(Cursor.Position, new Size(dragCursorPoint));
                this.Location = Point.Add(dragFromPoint, new Size(dif));
            }
        }

        private void panelButton_MouseUp(object sender, MouseEventArgs e)
        {
            dragging = false;
        }

        private void buttonContainer_Click(object sender, EventArgs e)
        {
            flowLayoutPanel1.Controls.Clear();
            UserControlContainer test = new UserControlContainer();
            flowLayoutPanel1.Controls.Add(test);
        }

        private void buttonDecla_Click(object sender, EventArgs e)
        {
            flowLayoutPanel1.Controls.Clear();
            UserControlDecla test = new UserControlDecla();
            flowLayoutPanel1.Controls.Add(test);
        }

        private void buttonHelp_Click(object sender, EventArgs e)
        {
            flowLayoutPanel1.Controls.Clear();
            UserControlAide test = new UserControlAide();
            flowLayoutPanel1.Controls.Add(test);
        }

        private void FormChef_Load(object sender, EventArgs e)
        {
            lblName.Text = "Bonjour " + userName + " !";

            UserControlContainer test = new UserControlContainer();
            flowLayoutPanel1.Controls.Add(test);

        }

       
    }
                    </code>
                </pre>
                </div>
            </div>
            <div class="row gx-0 mb-5 mb-lg-0 justify-content-center">
                <div class="col-lg-6">
                    <div class="bg-white text-center h-100 project">
                        <div class="d-flex h-100">
                            <div class="project-text w-100 my-auto text-center text-lg-left">
                                <h4>LDAP.</h4>
                                <p class="text-black-50 mb-0">L'entreprise exigeait une authentification par requête LDAP.</p>
                                <a class="text-black-50 mb-0" target="_blank" href="https://docs.microsoft.com/fr-fr/dotnet/api/system.directoryservices.protocols.ldapconnection?view=dotnet-plat-ext-6.0">En savoir plus</a>
                                <hr class="d-none d-lg-block mb-0 ms-0" />
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <img width="100%" src="./resources/assets/img/Sso/ldap.png" alt="class LDAP">
                </div>
            </div>
            <div class="col-xl-12 col-lg-12">
                <div class="featured-text text-center text-lg-left">
                    <h4 class="text-black">Class LDAP permettant la connexion.</h4>
                    <p class="mb-0 text-black-50"></p>
                    <pre>
                    <code class="language-csharp hljs">
class LDAP
    {
        private string GetCurrentDomainPath()
        {
            DirectoryEntry de = new DirectoryEntry("LDAP://tholdi.com");

            return "LDAP://" + de.Properties["defaultNamingContext"][0].ToString();
        }

        private void GetAllUsers()
        {
            SearchResultCollection results;
            DirectorySearcher ds = null;
            DirectoryEntry de = new
            DirectoryEntry(GetCurrentDomainPath());

            ds = new DirectorySearcher(de);
            ds.Filter = "(&(objectCategory=User)(objectClass=person))";

            results = ds.FindAll();

            foreach (SearchResult sr in results)
            {
                // Using the index zero (0) is required!
                Debug.WriteLine(sr.Properties["name"][0].ToString());
            }
        }

        public bool AuthenticateUser(string userName, string password)
        {
            bool ret = false;
            try
            {
                DirectoryEntry de = new DirectoryEntry("LDAP://tholdi.com",userName, password);
                DirectorySearcher dsearch = new DirectorySearcher(de);
                dsearch.Filter = "(objectClass=user)";
                SearchResult results = null;

                results = dsearch.FindOne();

                ret = true;
            }
            catch(Exception ex)
            {
                Console.WriteLine(ex.Message);
                ret = false;
            }

            return ret;
        }

    }
                    </code>
                </pre>
                </div>
            </div>
            <div class="col-xl-12 col-lg-12">
                <div class="featured-text text-center text-lg-left">
                    <h4 class="text-black">Requête LDAP.</h4>
                    <p class="mb-0 text-black-50"></p>
                    <pre>
                    <code class="language-csharp hljs">
LDAP ldap = new LDAP();
bool connexion = false;
string user = textBoxUsername.Text;
string password = textBoxPassword.Text;
connexion = ldap.AuthenticateUser(user, password);
                    </code>
                </pre>
                </div>
            </div>
            <div class="row gx-0 mb-5 mb-lg-0 justify-content-center">
                <div class="col-lg-6">
                    <img width="100%" src="./resources/assets/img/Sso/sql.png" alt="Class SQLConnector">
                </div>
                <div class="col-lg-6">
                    <div class="bg-white text-center h-100 project">
                        <div class="d-flex h-100">
                            <div class="project-text w-100 my-auto text-center text-lg-left">
                                <h4>MySQLConnector.</h4>
                                <p class="text-black-50 mb-0">L'application est connectée avec une base de données !</p>
                                <a class="text-black-50 mb-0" target="_blank" href="https://docs.microsoft.com/fr-fr/dotnet/api/system.data.sqlclient.sqlconnection?view=dotnet-plat-ext-6.0">En savoir plus.</a>
                                <hr class="d-none d-lg-block mb-0 ms-0" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-12 col-lg-12">
                <div class="featured-text text-center text-lg-left">
                    <h4 class="text-black">Class de connexion à la base de données.</h4>
                    <p class="mb-0 text-black-50"></p>
                    <pre>
                    <code class="language-csharp hljs">
class BddAccess
    {
        public static MySqlConnection GetDBConnection(bool persistSecurityInfo, string host, int port, string database, string username, string password, int timeout)
        {
            string connString = $"Persist Security Info={persistSecurityInfo};server={host};port={port};database={database};User Id={username};password={password};Connect Timeout={timeout}; convert zero datetime=True";
            MySqlConnection connection = new MySqlConnection(connString);

            return connection;
        }

        public static MySqlParameter CodeParam(string paramName, object value)
        {
            MySqlConnection connexion = GetDBConnection(false, "172.31.2.110", 3306, "tholdi", "root", "root", 60);
            MySqlCommand commandSql = connexion.CreateCommand();
            MySqlParameter parametre = commandSql.CreateParameter();
            parametre.ParameterName = paramName;
            parametre.Value = value;
            return parametre;
        }
    }
                    </code>
                </pre>
                </div>
            </div>
            <div class="col-xl-12 col-lg-12">
                <div class="featured-text text-center text-lg-left">
                    <h4 class="text-black">Exemple de récupération des conteneurs.</h4>
                    <p class="mb-0 text-black-50"></p>
                    <pre>
                    <code class="language-csharp hljs">
public static Containers getOneContainer(int num)
    {
        MySqlConnection connect = BddAccess.GetDBConnection(false, "127.0.0.1", 3306, "root", "root", "", 60);
        connect.Open();
        Containers c = null;
        MySqlCommand commandSql = connect.CreateCommand();
        commandSql.CommandText = _unConteneurs;
        commandSql.Parameters.Add(BddAccess.CodeParam("?numContainer", num));
        commandSql.Prepare();
        MySqlDataReader jeuEnregistrements = commandSql.ExecuteReader();
        bool existEnregistrement = jeuEnregistrements.Read();
        if (existEnregistrement)
            {
                c = new Containers();
                c.NumContainer = Convert.ToInt16(jeuEnregistrements["numContainer"].ToString());
                c.DateAchat = Convert.ToDateTime(jeuEnregistrements["dateAchat"].ToString());
                c.TypeContainer = Convert.ToString(jeuEnregistrements["typeContainer"].ToString());
            }
        connect.Close();
        return c;
    }
                    </code>
                </pre>
                </div>
            </div>
    </section>
    <footer class="footer bg-black small text-center text-white-50">
        <div class="container px-4 px-lg-5">Copyright &copy; JOUBERT Tristan &#169; 2017 - <?php echo $today = date("Y"); ?>
    </footer>
</body>