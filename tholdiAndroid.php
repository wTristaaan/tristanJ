<?php include_once 'inc/base.inc.php' ?>

<body id="page-top">
    <header class="mastheadTholdiAndroid">
        <div class="container px-4 px-lg-5 d-flex h-100 align-items-center justify-content-center" style="position: relative;top: -120px;">
            <div class="d-flex justify-content-center">
                <div class="text-center">
                    <h1 id="tholdiAndroid" class="writeJ mx-auto my-0 text-uppercase"></h1>
                    <img class="wow animate__animated animate__shakeY animate__infinite" data-wow-delay="9s" src="./resources/assets/img/duck.png" alt="Duck" width="10%">
                    <h2 class="text-white-50 mx-auto mt-2 mb-5">Console.WriteLine("PPE4");</h2>
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
                        <h2 class="text-white mb-4 wow animate__animated animate__backInLeft">Tholdi sur Android !</h2>
                        <i class="fas fa-info fa-2x mb-2 text-white wow animate__animated animate__backInRight"></i>
                    </div>
                    <p class="text-white-50 wow animate__animated animate__backInLeft">
                        Tholdi est une application Android basée sur la continuité de mes projets. C'est la suite directe du site web du même nom.
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
            <div class="row gx-0 mb-4 mb-lg-5 align-items-center wow animate__animated animate__backInLeft">
                <div class="col-xl-8 col-lg-7">
                    <div class="col-xl-8 col-lg-7">
                        <img width="100%" src="./resources/assets/img/tholdiAndroid.png" alt="Tholdi android">
                    </div>
                </div>
                <div class="col-xl-4 col-lg-5">
                    <div class="featured-text text-center text-lg-left">
                        <h4 class="text-black">Tholdi sur Android.</h4>
                        <p class="mb-0 text-black-50">L'application Tholdi a été devoloppée en Java grâce à l'IDE Android studio.
                            Il m'a permis de comprendre les bases d'un développement mobile et des web service.</p>
                    </div>
                </div>
            </div>
            <div class="row gx-0 mb-5 mb-lg-0 justify-content-center">
                <div class="col-lg-6">
                    <div class="bg-white text-center h-100 project">
                        <div class="d-flex h-100">
                            <div class="project-text w-100 my-auto text-center text-lg-left">
                                <h4>Les web services</h4>
                                <p class="text-black-50 mb-0">Un Web Service est une application qui permet d'échanger des données avec d'autres applications web.</p>
                                <a class="text-black-50 mb-0" target="_blank" href="https://fr.wikipedia.org/wiki/Service_web">En savoir plus.</a>
                                <hr class="d-none d-lg-block mb-0 ms-0" />
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <img width="100%" src="./resources/assets/img/Android/webService.png" alt="Web Service illustration">
                </div>
                <div class="col-xl-12 col-lg-12">
                    <div class="featured-text text-center text-lg-left">
                        <h4 class="text-black">Contacter un web service.</h4>
                        <p class="mb-0 text-black-50"></p>
                        <pre>
                       <code class="Java">
StringRequest sr = new StringRequest(Request.Method.POST, "http://172.16.200.154/api/login",

new Response.Listener String() {
 //paramètres
 //traitement
 //réponse
};
                        </code>
                    </pre>
                    </div>
                </div>
            </div>
            <div class="row gx-0 mb-5 mb-lg-0 justify-content-center">
                <div class="col-lg-6">
                    <img width="100%" src="./resources/assets/img/Android/home.png" alt="IHM">
                </div>
                <div class="col-lg-6">
                    <div class="bg-white text-center h-100 project">
                        <div class="d-flex h-100">
                            <div class="project-text w-100 my-auto text-center text-lg-left">
                                <h4>IHM.</h4>
                                <p class="text-black-50 mb-0">L'environnement Android utilise le langage XML pour gérer le rendu utilisateur.</p>
                                <hr class="d-none d-lg-block mb-0 ms-0" />
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-12 col-lg-12">
                    <div class="featured-text text-center text-lg-left">
                        <h4 class="text-black">Code XML de la page d'accueil.</h4>
                        <p class="mb-0 text-black-50"></p>
                        <pre>
                       <code class="hljs xml">
xml version="1.0" encoding="utf-8"
androidx.constraintlayout.widget.ConstraintLayout xmlns:android="http://schemas.android.com/apk/res/android"
    xmlns:app="http://schemas.android.com/apk/res-auto"
    xmlns:tools="http://schemas.android.com/tools"
    android:layout_width="match_parent"
    android:layout_height="match_parent"
    tools:context=".ui.home.HomeFragment"   

    TextView
        android:id="@+id/text_home"
        android:layout_width="match_parent"
        android:layout_height="wrap_content"
        android:layout_marginStart="8dp"
        android:layout_marginTop="8dp"
        android:layout_marginEnd="8dp"
        android:textAlignment="center"
        android:textSize="20sp"
        app:layout_constraintBottom_toBottomOf="parent"
        app:layout_constraintEnd_toEndOf="parent"
        app:layout_constraintStart_toStartOf="parent"
        app:layout_constraintTop_toTopOf="parent" 
androidx.constraintlayout.widget.ConstraintLayout
                        </code>
                    </pre>
                    </div>
                </div>
            </div>
            <div class="row gx-0 mb-5 mb-lg-0 justify-content-center">
                <div class="col-lg-6">
                    <div class="bg-white text-center h-100 project">
                        <div class="d-flex h-100">
                            <div class="project-text w-100 my-auto text-center text-lg-left">
                                <h4>Menu.</h4>
                                <p class="text-black-50 mb-0">La navigation dans l'application se fait par le bien d'un menu.</p>
                                <hr class="d-none d-lg-block mb-0 ms-0" />
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <img width="100%" src="./resources/assets/img/Android/home.png" alt="Menu">
                </div>
                <div class="col-xl-12 col-lg-12">
                    <div class="featured-text text-center text-lg-left">
                        <h4 class="text-black">Code XML du menu.</h4>
                        <p class="mb-0 text-black-50"></p>
                        <pre>
                       <code class="xml">
xml version="1.0" encoding="utf-8"
xmlns:android="http://schemas.android.com/apk/res/android">

    item
        android:id="@+id/navigation_home"
        android:icon="@drawable/ic_home"
        android:title="@string/title_home" />

    item
        android:id="@+id/navigation_dashboard"
        android:icon="@drawable/ic_reserv"
        android:title="@string/title_dashboard" />

    item
        android:id="@+id/navigation_notifications"
        android:icon="@drawable/ic_baseline_settings_24"
        android:title="@string/title_notifications" />

menu>
                        </code>
                    </pre>
                    </div>
                    <div class="col-xl-12 col-lg-12">
                        <div class="featured-text text-center text-lg-left">
                            <h4 class="text-black">Code XML des différents fragments.</h4>
                            <p class="mb-0 text-black-50"></p>
                            <pre>
                       <code class="xml">
xml version="1.0" encoding="utf-8"?>
navigation xmlns:android="http://schemas.android.com/apk/res/android"
    xmlns:app="http://schemas.android.com/apk/res-auto"
    xmlns:tools="http://schemas.android.com/tools"
    android:id="@+id/mobile_navigation"
    app:startDestination="@+id/navigation_home">

    fragment
        android:id="@+id/navigation_home"
        android:name="com.gsb.ppe4.ui.home.HomeFragment"
        android:label="@string/title_home"
        tools:layout="@layout/fragment_home" />

    fragment
        android:id="@+id/navigation_dashboard"
        android:name="com.gsb.ppe4.ui.dashboard.DashboardFragment"
        android:label="@string/title_dashboard"
        tools:layout="@layout/fragment_dashboard" />

    fragment
        android:id="@+id/navigation_notifications"
        android:name="com.gsb.ppe4.ui.notifications.NotificationsFragment"
        android:label="@string/title_notifications"
        tools:layout="@layout/fragment_notifications" />
navigation>
                        </code>
                    </pre>
                        </div>
                    </div>
                </div>
                <div class="row gx-0 mb-5 mb-lg-0 justify-content-center">
                    <div class="col-lg-6">
                        <img width="100%" src="./resources/assets/img/Android/login.png" alt="login">
                    </div>
                    <div class="col-lg-6">
                        <div class="bg-white text-center h-100 project">
                            <div class="d-flex h-100">
                                <div class="project-text w-100 my-auto text-center text-lg-left">
                                    <h4>Connexion.</h4>
                                    <p class="text-black-50 mb-0">La connexion se fait via un appel à notre web service qui retourne une réponse au format JSON. Si le login et le mot de passe passés
                                        en paramètre sont dans notre BDD la réponse sera true, sinon la réponse sera false.
                                    </p>
                                    <hr class="d-none d-lg-block mb-0 ms-0" />
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-12 col-lg-12">
                        <div class="featured-text text-center text-lg-left">
                            <h4 class="text-black">Code JAVA de l'appel au web service.</h4>
                            <p class="mb-0 text-black-50"></p>
                            <pre>
                       <code class="java">
StringRequest sr = new StringRequest(Request.Method.POST, "http://172.16.200.154/api/login",
new Response.Listener String() {

    @Override
    public void onResponse(String response) {
        JSONObject connected = null;
        try {
            connected = new JSONObject(response);
            boolean state = connected.getBoolean("connected");
            int userID = connected.getInt("userID");
            if (state) {
                Intent myIntent = new Intent(Login.this, MainActivity.class);
                Log.d("2", "if(true)");

                SharedPreferences.Editor editor = sharedpreferences.edit();
                editor.putString(EMAIL_KEY, login);
                editor.putString(PASSWORD_KEY, password);
                editor.putString(USER_KEY, Integer.toString(userID));
                editor.apply();
                startActivity(myIntent);
            }
        } catch (JSONException e) {
            e.printStackTrace();
            String err = e.getMessage();
            Log.e("MainActivity", "JsonException" + err);
        }
    }
},

new Response.ErrorListener() {
    @Override
    public void onErrorResponse(VolleyError error) {
        Log.d("e", "echec de la connexion");
    }
}) {
    @Override
    protected Map String, String getParams() {
    Map String, String params = new HashMap String, String();
    params.put("login", login);
    params.put("password", password);
    return params;
    }

    @Override
    public Map String, String getHeaders() throws AuthFailureError {
    Map String, String params = new HashMap String, String();
    params.put("Content-Type", "application/x-www-form-urlencoded");
    return params;
    }
};
                        </code>
                    </pre>
                        </div>
                    </div>
                </div>
                <div class="row gx-0 mb-5 mb-lg-0 justify-content-center">
                    <div class="col-lg-6">
                        <div class="bg-white text-center h-100 project">
                            <div class="d-flex h-100">
                                <div class="project-text w-100 my-auto text-center text-lg-left">
                                    <h4>Inscription</h4>
                                    <p class="text-black-50 mb-0">De même pour l'inscription d'un utilisateur.
                                        les valeurs données dans les différents inputs sont récupérées, envoyées en paramètres à notre web service qui se
                                        chargera de les inscrire dans une BDD. si l'insertion se passe bien, la valeur true est renvoyée, sinon false.
                                    </p>
                                    <hr class="d-none d-lg-block mb-0 ms-0" />
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <img width="100%" src="./resources/assets/img/Android/signUp.png" alt="inscription">
                    </div>
                    <div class="col-xl-12 col-lg-12">
                        <div class="featured-text text-center text-lg-left">
                            <h4 class="text-black">Code JAVA du traitement de l'inscription.</h4>
                            <p class="mb-0 text-black-50"></p>
                            <pre>
                       <code class="java">
StringRequest sr = new StringRequest(Request.Method.POST, "http://172.16.200.154/api/user",
new Response.Listener String() {

    @Override
    public void onResponse(String response) {
        JSONObject create = null;
        try {
            create = new JSONObject(response);
            boolean state = create.getBoolean("isStore");
            if (state) {
                Intent myIntent = new Intent(SignUp.this, MainActivity.class);
                startActivity(myIntent);
            }else{
                Log.d("state false", "c'est non");
            }
        } catch (JSONException e) {
            e.printStackTrace();
            String err = e.getMessage();
            Log.e("MainActivity", "JsonException" + err);
        }
    }
},

new Response.ErrorListener() {
    @Override
    public void onErrorResponse(VolleyError error) {
        String err = error.getMessage();
        //Log.e("MainActivity", err);
    }
}) {
    @Override
    protected Map String, String> getParams() {
    Map String, String> params = new HashMap String, String>();
    params.put("login", login);
    params.put("password", password);
    params.put("raisonSociale", company);
    return params;
    }

    @Override
    public Map String, String> getHeaders() throws AuthFailureError {
    Map String, String> params = new HashMap String, String>();
    params.put("Content-Type", "application/x-www-form-urlencoded");
    return params;
    }
};
queue.add(sr);
                        </code>
                    </pre>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <img width="100%" src="./resources/assets/img/Android/reserv.png" alt="réservation">
                </div>
                <div class="col-lg-6">
                    <div class="bg-white text-center h-100 project">
                        <div class="d-flex h-100">
                            <div class="project-text w-100 my-auto text-center text-lg-left">
                                <h4>Réservation.</h4>
                                <p class="text-black-50 mb-0">Le principe de l'application est de gérer les espaces de réservations de conteneurs. Le web service peut aussi nous renvoyer
                                    différents éléments présents dans la BDD. Ici, le web service nous renvoie les espaces réservés par l'utilisateur courant.
                                </p>
                                <hr class="d-none d-lg-block mb-0 ms-0" />
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-12 col-lg-12">
                    <div class="featured-text text-center text-lg-left">
                        <h4 class="text-black">Code JAVA récupération des réservations client.</h4>
                        <p class="mb-0 text-black-50"></p>
                        <pre>
                       <code class="java">
StringRequest sr = new StringRequest(Request.Method.POST, "http://172.16.200.154/api/userReservation",
new Response.Listener String>() {

    @Override
    public void onResponse(String response) {
        JSONObject reservation = null;
        try {
            reservation = new JSONObject(response);
            mainView.setText(reservation.toString());
        } catch (JSONException e) {
            e.printStackTrace();
            String err = e.getMessage();
            Log.e("MainActivity", "JsonException" + err);
        }
    }
},

new Response.ErrorListener() {
    @Override
    public void onErrorResponse(VolleyError error) {
        Log.d("e", "connexion failed");
    }
}) {
    @Override
    protected Map String, String> getParams() {
    Map String, String> params = new HashMap String, String>();
    params.put("userID", userID);
    return params;
    }


    @Override
    public Map String, String> getHeaders() throws AuthFailureError {
    Map String, String> params = new HashMap String, String>();
    params.put("Content-Type", "application/x-www-form-urlencoded");
    return params;
    }
    };
    queue.add(sr);

    return root;
}
                        </code>
                    </pre>
                    </div>
                </div>
            </div>
    </section>
    <footer class="footer bg-black small text-center text-white-50">
        <div class="container px-4 px-lg-5">Copyright &copy; JOUBERT Tristan &#169; 2017 - <?php echo $today = date("Y"); ?>
    </footer>
</body>