<form action="{{ route('store.candidat') }}" method="post" enctype="multipart/form-data" >
                        @csrf
                        <div class="row mb-3">
                            <label for="email" class="col-sm-3 col-form-label">Adresse Email:</label>
                            <div class="col-sm-9">
                                <input type="email" name="email" id="email" placeholder="Votre réponse" class="form-control">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="nom" class="col-sm-3 col-form-label">Nom:</label>
                            <div class="col-sm-9">
                                <input type="text" name="nom" id="nom" placeholder="Votre réponse" class="form-control">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="prenom" class="col-sm-3 col-form-label">Prenom:</label>
                            <div class="col-sm-9">
                                <input type="text" name="prenom" id="prenom" placeholder="Votre réponse" class="form-control">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="telephone" class="col-sm-3 col-form-label">Téléphone</label>
                            <div class="col-sm-9">
                                <input type="tel" name="telephone" id="telephone" placeholder="Votre réponse" class="form-control">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="adresse" class="col-sm-3 col-form-label">Adresse Domicile</label>
                            <div class="col-sm-9">
                                <input type="text" name="adresse" id="adresse" placeholder="Votre réponse" class="form-control">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="domaine" class="col-sm-3 col-form-label">Choisir votre domaine de compétence</label>
                            <div class="col-sm-9">
                                <select name="domaine" id="domaine" class="form-select">
                                    @foreach ($module as $modules)
                                    <option value="{{ $modules->libele }}">{{ $modules->libele }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="myfile" class="col-sm-3 col-form-label">Télécharger votre CV:</label>
                            <div class="col-sm-9">
                                {{-- <input type="file" id="myfile" name="myfile" accept="application/pdf,docx,text" class="form-control"> --}}
                                <input type="file" id="myfile" name="myfile" accept=".pdf,.doc,.docx" class="form-control">

                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="question" class="col-sm-3 col-form-label">Question/Suggestion/Commentaire</label>
                            <div class="col-sm-9">
                                <input type="text" name="question" id="question" placeholder="Votre réponse" class="form-control">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col text-center">
                                <button class="btn" style="background-color: #85addb">Envoyer</button>
                            </div>
                        </div>
                    </form>



                    <section id="content">
		<article>
			<header>
  				<!-- <legend>Candidature Spontanée: </legend> -->
                  <div class="card-header text-white fs-5 fw-bold text-center" style="background-color: #85ADDB; color:white; text-align:center; font-weight:bold; padding: 20px;">FORMATION DE STAGE 100% PRATIQUE</div>
			</header>
	        <form name="myForm" action="traitement.php" method="post" onsubmit="return f_myForm()">
				<label for="titre1">Mr :</label>
	          	<input type="radio" name="Titre" id="titre1" value="Mr"/>
						<label for="titre2">Mme :</label>
	          	<input type="radio" name="Titre" id="titre2" value="Mme"/>
	          	<br/>
	          	<label for="statu">Status :</label>
	          	<select size="1" name="Status" id="status">
					<optgroup label="Defar Sci">
						<option value="0">...</option>
						<option value="eleve">Élève</option>
						<option value="etudiant">Etudiant</option>
						<option value="professionnel">Professionnel</option>
					</optgroup>
				</select>
				<br/>
				<label for="nom">Nom :</label>
				<input type="text" name="Nom" id="nom" maxlength="30" />
				<br/>
				<label for="prenom">Prénom :</label>
				<input type="text" name="Prenom" id="prenom" maxlength="30" />
				<br/>
				<label for="adresse">Adresse :</label>
                <input type="text" name="adresse" id="adresse" maxlength="30" />
                <br/>
				<label for="telephone">Telephone :</label>
				<input type="number" name="Mobile" id="mobile" maxlength="10" />
				<br/>
				<label for="email">Email :</label>
				<input type="email" name="Email" id="email" placeholder="xyz@xyz.xyz" maxlength="30" />
				<br/>
                <label for="domaine">Domaine choisi :</label>
				<input type="text" name="Domaine" id="domaine" maxlength="30" />
                <br/>
				<label for="fichier">CV:</label>
				<input type="file" name="Avatar" id="avatar" />
				<br/>
                <label for="fichier">Lettre de motivation:</label>
                <input type="file" name="Motivation" id="motivation" />
                <br/>
				<label for="commentaire">Commentaire :</label>
				<textarea cols="24" rows="10" name="Commentaire" id="commentaire"></textarea>
				<br/>
				<div id="esp_submit_reset">
				<input type="submit" name="envoie" value="Envoyer" />
	        	</div>
	        </form>
	        <footer>
	        </footer>
	    </article>
	</section>


    @charset "utf-8";
/* CSS Document */
* {margin: 0; padding: 0;}
:root{
    width:960px;
    height:100%;
    margin:0px auto;
}
/*-------------------------------------------------------- HTML -*/
a:link, a:visited, a:hover, a:active {
    text-decoration:none;
    margin-left:10px;
}
/*-------------------------------------------------------- HTML -*/
html{
    background-image: url(http://moniris.com/webmail/skins/larry/images/linen.jpg);
}
/*-------------------------------------------------------- BODY-*/
body{
    width:960px;
    /*height: 100%;*/
    margin: 0 auto;
}
/*-------------------------------------------------------- CONTENT-*/
#content{
    width: 100%;
    height:70%;
    /* top: 50%; */
    /* left: 50%; */
    max-width: 48rem;
    position: absolute;
    /* margin:-250px 0px 0px -200px; */
    margin: auto;
    /* background-color:#85ADDB; */
    border: 1px solid #85ADDB;
    background-repeat: repeat;
    border-radius: 5px;
    
}
/*-------------------------------------------------------- HEADER-*/
header{
    float: left;
    width: 100%;
    height: 30px;
}
/*-------------------------------------------------------- NAV-*/
nav{
    float: left;
    width: 842px;
    height: 94px;
    margin: 5px 5px;
}
/*-------------------------------------------------------- FOOTER-*/
footer{
    float: left;
    width: 100%;
    height: px;
}
/*-------------------------------------------------------- AUTRES-*/
form{
    float: left;
   
}
legend{
    float: left;
    width: ;
    margin: 5px 0 10px 175px;
    font-family: "Times New Roman", Times, serif;
    font-style: normal;
    font-size: 16px;
    color: Black;
}
label{
    float: left;
    margin: 2px 0px 2px 40px;
    color:Black;
    width: 200px;
}
label[for="titre1"]{
float: left;
    margin: 2px 40px 2px 40px;
    color:Black;
    width: 50px;
}
label[for="titre2"]{
    position: relative;
    float: left;
    margin: 2px 40px 2px 40px;
    color:Black;
    width: 50px;
}
input[type="text"], input[type="number"], input[type="email"],input[type="password"], 
input[type="time"], input[type="date"], input[type="datetime"], input[type="tel"], select{
    float: right;
    margin: 2px 40px 2px 0px;
    padding-left: 10px;
    border-radius: 5px;
    width: 200px;
}
input[type="file"] {
    border-radius: 5px 5px 5px 5px;
    float: right;
    margin: 2px 26px 2px 0;
    padding-left: 10px;
    width: 226px;
}
textarea{
    border-radius: 5px 5px 5px 5px;
    float: right;
    height: 100px;
    margin: 2px 40px 2px 0;
    padding-left: 10px;
    resize: none;
    width: 406px;
}
input[type="radio"]{
    float: left;
    margin: 2px 40px 2px 0px;
    padding-left: 10px;
    border-radius: 5px;
    width: 20px;
}
select{
    width: 215px;
}
input[TYPE="checkbox"]{
    float: left;
    margin: 5px 0px 2px 10px;
    padding-left: 0px;
}
input[TYPE="SUBMIT"]{
    float: left;
    margin: 0px 0px 10px 189px;
    padding: 0px 5px 0px 5px;
}
input[TYPE="RESET"],input[TYPE="BUTTON"]{
    float:left;
    margin: 0px 0px 10px 0px;
    padding: 0px 5px 0px 5px;
}
input[TYPE="SUBMIT"]:hover, input[TYPE="RESET"]:hover, input[TYPE="BUTTON"]:hover, textarea:hover{
    
}
.bad{
    border: solid 2px red;
}
.good{
    border: solid 2px green;
}



<!-- formulare normal -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link rel="stylesheet" href="css/style.css">
    
    <title>Candidature Spontanée</title>
</head>
<body>
<!-- <div class="container contact-form">
            <div class="contact-image">
                <img src="https://image.ibb.co/kUagtU/rocket_contact.png" alt="rocket_contact"/>
            </div>
            <form method="post">
                <h3>Votre Candidature</h3>
               <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <input type="text" name="txtName" class="form-control" placeholder="Votre Nom *" value="" />
                        </div>
                        <div class="form-group">
                            <input type="text" name="txtEmail" class="form-control" placeholder="Votre Email *" value="" />
                        </div>
                        <div class="form-group">
                            <input type="text" name="txtPhone" class="form-control" placeholder="Votre Téléphone *" value="" />
                        </div>
                        <div class="form-group">
                            <input type="text" name="txtAdresse" class="form-control" placeholder="Votre Adresse *" value="" />
                        </div>
                        <div class="form-group">
                            <input type="text" name="txtDomaine" class="form-control" placeholder="Votre Domaine choisi *" value="" />
                        </div>
                        <div class="form-group">
                            <input type="submit" name="btnSubmit" class="btnContact" value="Envoyer" />
                        </div>
                    </div>
                    <div class="col-md-6">
                    <div class="form-group">
                    <label for="fichier">Votre CV:</label>
                            <input type="file" name="txtCv" class="form-control" placeholder="Votre cv*"  value="" />
                        </div>
                        <div class="form-group">
                            <label for="fichier">Lettre de motivation:</label>
                            <input type="file" name="txtMotivaation" class="form-control" placeholder="Votre Lettre de motivation *"  value="" />
                        </div>
                        
                    </div>
                </div>
            </form> 
</div>-->
<div class="wrapper">
     <div class="form">
         <h1 class="title">Candidature Spontanée</h1>

         <form action="traitement.php" class="myform" method="post" enctype="multipart/form-data">
             <div>
             <div class="control-from">
                 <label for="nom">Nom *</label>
                 <input type="text" name="nom" id="nom" value="" required>
             </div>

             <div class="control-from">
                 <label for="prenom">Prénom *</label>
                 <input type="text" name="prenom" id="prenom" value="" required>
             </div>

             <div class="control-from">
                 <label for="email">Adresse Email *</label>
                 <input type="text" name="email" id="email" value="" required>
             </div>

             <div class="control-from">
                 <label for="mobile">Téléphone *</label>
                 <input type="tel" name="mobile" id="mobile" value="" required>
             </div>

             <div class="full-width">
                 <label for="adresse">Adresse *</label>
                 <input type="text" name="adresse" id="adresse" value="" required>
             </div>

             <div class="control-from">
                 <label for="domaine">Domaine *</label>
                 <input type="text" name="domaine" id="domaine" value="" required>
             </div>
             </div>
             <div>
                <div class="control-from" id="fichier">
                    <label for="motivation">Télécharger votre lettre de motivation *</label>
                    <input type="file" id="motivation" name="motivation" class="pt-2" accept=".pdf, .doc, .docx" required>
                </div>

                <div class="control-from" id="fichier">
                    <label for="cv">Télécharger votre CV *</label>
                    <input type="file" id="cv" name="cv" class="pt-2" accept=".pdf, .doc, .docx" required>
                </div>
                
                <div class="button">
                    <button type="submit" name="envoyer" class="my-3" id="envoyer">Envoyer</button>
                </div>
            </div>

         </form>
     </div>
 </div>
</body>

<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="js/script.js"></script>
</html>