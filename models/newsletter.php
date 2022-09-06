 <!------>
 <div class="newsletter wow fadeInRight" data-wow-duration=".5s" style="margin-right: 10px;padding:10px ;">
     <div class="card-body">
         <div class="card-text">
             <h6 class="cb" style="color: #0067C0 ">Suscríbe a nuestro evento científico</h6>

         </div>
         <form name="suscriptores" id="suscriptores">
             <input type="email" class="nw-email" name="Emails" placeholder="🌍 Ingresa tu Email">
             <input type="hidden" id="Date" name="Date" value="<?php date_default_timezone_set('America/Lima');
                                                                $date = date('d-m-y');
                                                                echo $date ?>">
             <input type="hidden" id="Hora" name="Hora" value="<?php date_default_timezone_set('America/Lima');
                                                                $date = date('h:i:s A');
                                                                echo $date ?>">
             <input type="hidden" id="location" name="location">
             <script type="text/javascript">
                 document.getElementById("location").value = (Intl.DateTimeFormat().resolvedOptions().timeZone);
             </script>
             <button class="btn-shared-posters btn-block paragrama text-center" id="submitsuscrirtor" type="submit">Suscribirse <i class="fa-solid fa-bell"></i></button>
             <script>
                 function limpiarFormulario() {
                     document.getElementById("suscriptores").reset();
                 }

                 const scriptURL = 'https://script.google.com/macros/s/AKfycbyDSpPDl7NE8oCJNqMxbDJfJXlwhcXZSfPp8y8VJZXZMpL6UQP2Ggx33_IkYAeTgFutLg/exec'
                 const form = document.forms['suscriptores'];
                 const btnsuscriptores = document.querySelector("#submitsuscrirtor");

                 form.addEventListener('submit', e => {
                     e.preventDefault();

                     btnsuscriptores.disabled = true;
                     btnsuscriptores.innerHTML = "Loading...";
                     fetch(scriptURL, {
                             method: 'POST',
                             body: new FormData(form)
                         })
                         .then((response) => {
                             btnsuscriptores.disabled = false;
                             btnsuscriptores.innerHTML = `Suscribirse <i class="fa-solid fa-bell"></i>`;
                             alertify.alert("Gracias 😃, te acabas se suscribir a nuestro evento científico").set({title:"Notificacion"}).set({labels:{ok:'Gracias', cancel: 'Cerrar'}});;
                             limpiarFormulario();

                         })
                         .catch(error => console.error('Error!', error.message))
                 })
             </script>










         </form>

     </div>
     <style>
         .title-poster {
             margin-top: -150px !important;
             text-align: left !important;
         }

         .poster-estadia {
             margin-right: 5px;
             margin-bottom: 2px;
             padding: 2px;
             margin-left: 5px;
         }

         .title-posters {
             text-align: left !important;
         }

         .poster-estadia {
             background: rgba(255, 255, 255, 0.25);
             box-shadow: 0 8px 32px 0 rgba(31, 38, 135, 0.37);
             backdrop-filter: blur(4px);
             -webkit-backdrop-filter: blur(4px);
             border-radius: 10px;
             border: 1px solid rgba(255, 255, 255, 0.18);
         }

         .color-base {
             color: #fff;
             text-shadow: 10px;
         }

         .mg-5 {
             margin-bottom: 4rem !important;
         }

         .card-stadia {
             background-color: #fff;
         }

         h6 .cb {
             color: #0067C0 !important;
         }

         .name-txt {
             /* background-color: #0067C0;*/
             background-color: #fff;
             color: #0067C0;
         }

         .btn-txtr {
             background-color: #fff;
             border-radius: 10px !important;
             color: #0067C0 !important;
         }

         .btn-txtr:hover {
             background-color: #0067C0;
             border-radius: 10px !important;
             color: #fff !important;
         }

         .btnblue {
             background-color: #0067C0;
             border-radius: 10px !important;
             color: #fff !important;
         }

         .btnblue:hover {
             background-color: #fff;
             border: 2px solid #0067C0 !important;
             border-radius: 10px !important;
             color: #0067C0 !important;
         }

         .paragrama {
             -webkit-transform: skew(10deg);
             -moz-transform: skew(10deg);
             -o-transform: skew(10deg);
         }

         .blanco-hover:hover {
             background-color: #0067C0 !important;
             color: #fff !important;
             padding: 4px;
             margin-bottom: 10px;
             border-radius: 7px;
         }

         .blanco-hover {
             background-color: #fff !important;
             color: #0067C0 !important;
             padding: 4px;
             margin-bottom: 10px;
             border-radius: 7px;
         }

         #videopl {
             overflow-x: hidden;
             overflow-y: hidden;
             border: hidden;
             height: 630px;
             margin-top: -180px;
         }

         .newsletter {
             background-color: #fff;
             border-radius: 8px !important;
         }

         .nw-email {
             border-radius: 8px !important;
         }

         .nw-email:focus {
             border: 3px solid #0067C0 !important;
         }

         .nw-email:focus::after {
             content: 'Ingresa Email';
         }

         .t-shadow {
             text-shadow: 2px 1px 2px rgba(0, 0, 0, 0.28);

         }
     </style>


     <!----->

     <!------->
 </div>