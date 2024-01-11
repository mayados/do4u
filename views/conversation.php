<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Propose services de ménage</title>
    <link rel="icon" href="../public/img/logo_do4u.svg">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="../public/assets/sass/main.css">
</head>
<body>
<?php require_once base_path('views/components/menu.php'); ?>
<?php displayErrorsAndMessages() ?>
    <main id="main-conversation">
        <div class=" container-fluid container-lg  bg-white p-0">
            <section id="section-top-conversation" class="d-flex justify-content-between align-items-center px-3 px-lg-5 py-2">
                <div class="d-flex align-items-center gap-2 gap-lg-5 ">
                    <a href="messenger.php"><i class="fa-solid fa-arrow-left text-white user-conversation-top-icon"></i></a>                      
                    <div class="d-flex gap-1 align-items-center gap-lg-3">
                        <figure class="figure-user-conversation mb-0">
                            <img src="../public/assets/img/woman_face.jpg" class="rounded-circle object-fit-cover" alt="Image de profil de Lola">
                        </figure> 
                        <h2><a href="userProfile.php" id="user-conversation" class="text-white text-decoration-none">Lola</a></h2>
                    </div>
                </div>
                <div class="container-dots-action h-100">
                    <button class="vertical-dots d-flex align-items-center rounded signalement" id="signalement2" tabindex="0"><i class="fa-solid fa-ellipsis-vertical user-conversation-top-icon"></i></button>
                    <div class="signalement-action" id="signalement_avis2">               
                        <button class=" button-secondary-regular" data-bs-toggle="modal" data-bs-target="#signalement_modal2">Signaler</button>
                        <button class=" button-secondary-regular mt-1" tabindex="-1" data-bs-toggle="modal" data-bs-target="#supprimer_conversation">Supprimer la conversation</button>
                    </div>
                    <div class="modal fade modal-z-index" id="signalement_modal2" tabindex="-1" aria-labelledby="signalerAvis" aria-hidden="true">
                        <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                            <h2 class="modal-title fs-5 text-center" id="signalerAvis1">Signaler la conversation</h2>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Fermer"></button>
                            </div>
                            <div class="modal-body">
                                <form>
                                    <div class="form-group">
                                      <label for="motif">Motif du signalement</label>
                                      <input type="text" class="form-control" id="motif" aria-describedby="motifSignalement" placeholder="Motif du signalement">
                                    </div>
                                    <div class="form-group d-flex flex-column">
                                      <label for="explication-signalement">Explication du signalement</label>
                                      <textarea name="" id="explication-signalement" placeholder="Expliquez ici pourquoi vous souhaitez signaler la conversation"></textarea>
                                    </div>
                                    <button type="submit" class="button-primary-regular">Signaler</button>
                                  </form>
                            </div>
                        </div>
                        </div>
                    </div>
                    <div class="modal fade modal-z-index" id="supprimer_conversation" tabindex="-1" aria-labelledby="supprimerConversation" aria-hidden="true">
                        <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                            <h2 class="modal-title fs-5 text-center" id="signalerAvis1">Supprimer la conversation</h2>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Fermer"></button>
                            </div>
                            <div class="modal-body">
                                <p>Etes-vous sûr de vouloir supprimer cette conversation ?<br>
                                Attention, cette action est irréversible</p>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
                                <button type="button" class="btn btn-primary">Supprimer</button>
                            </div>
                        </div>
                        </div>
                    </div>


                </div>
            </section>
            <section id="annonce-conversation" class="d-flex align-items-center gap-3 ps-5 py-2">
                <figure class="figure-user-conversation mb-0">
                    <img src="../public/assets/img/affection-spouses 546x364.jpg" class="rounded object-fit-cover" alt="Détail photo de l'annonce Propose services de ménage">
                </figure> 
                <h2><a href="adDetails.php" class="text-dark text-decoration-none" id="annonce-conversation">Propose services de ménage</a></h2>
            </section>
            <section id="conversation-area">
                <div id="conversation-scrollable">
                    <div class="row m-1 p-0">
                        <div class="correspondant-message col-lg-6 col-10 px-2 py-4  text-right mt-5 mt-lg-4 rounded">
                            <p class="text-white fw-bold mb-0">Bonjour, je serais intéressée par votre annonce, est-elle toujours disponible ? je vous remercie Lorem ipsum dolor sit, amet consectetur adipisicing elit. Illum, optio expedita placeat nam perspiciatis autem quaerat tempora nesciunt et, explicabo ipsa quas molestias distinctio numquam quo! Quae, repudiandae voluptate. Nulla!</p>
                            <p class="correspondant-message-state ">Vu - 23/11/2023 11h36</p>
                        </div>                    
                    </div>
                    <div class="row m-1 p-0">
                        <div class="mon-message offset-2 col-10 offset-lg-6 col-lg-6  py-4 text-left mt-5 mt-lg-4 rounded">
                            <p class="text-white fw-bold mb-0">Bonjour Lola, j'espère que vous allez bien. Oui cette annonce est toujours disponible Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere suscipit corporis repellendus similique, dicta ex architecto minima maiores iste asperiores molestiae pariatur explicabo quae cum eum laboriosam. Facilis, explicabo modi.</p>
                            <p class="mon-message-state">Vu - 23/11/2023 11h36</p>
                        </div>                    
                    </div>
                    <div class="row m-1 p-0">
                        <div class="correspondant-message col-lg-6 col-10 px-2 py-4  text-right mt-5 mt-lg-4 rounded">
                            <p class="text-white fw-bold mb-0">Super, dans ce cas qu'elle sont vos disponibilités du moment ? </p>
                            <p class="correspondant-message-state">Vu - 23/11/2023 11h36</p>
                        </div>                    
                    </div>
                    <div class="row m-1 p-0">
                        <div class="mon-message offset-2 col-10 offset-lg-6 col-lg-6 px-2 py-4 me-3 text-left mt-5 mt-lg-4 rounded">
                            <p class="text-white fw-bold mb-0">Je suis généralement disponible en après-midi. Je peux vous proposer mercredi si ça vous convient</p>
                            <p class="mon-message-state">Vu - 23/11/2023 11h36</p>
                        </div>                    
                    </div>                    
                </div>

                <form action="" method="post" enctype="multipart/form-data" id="form-conversation" class="d-flex align-items-center pt-4 pb-4 mt-5">
                    <div id="container-input-file">
                        <input type="file" name="photo" class="form-control-file" id="fileInput" tabindex="0">
                        <label for="fileInput" class="btn label-file" role="button" tabindex="-1">
                            <i class="fas fa-paperclip"></i> 
                        </label>                                     
                    </div>
                    <textarea name="message" class="form-control" placeholder="Votre message"></textarea>
                    <div id="container-submit-message">
                        <button type="submit" class="btn" aria-label="Envoyer le message"><i class="fa-regular fa-paper-plane"></i></button>
                    </div>
                  </form>            
            </section>
        </div>
    </main>
    <?php require_once base_path('views/components/footer.php'); ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="../public/assets/js/script.js"></script>
</body>
</html>