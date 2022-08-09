const langNav = () =>
{
    const langButton = document.getElementById("main-menu__lang-button");
    const langList = document.getElementById("main-menu__lang-list");

    langButton.addEventListener("click", ()=>{

        addEventListener("scroll", retirar);

        function retirar() { 
            if (langList.classList.contains("main-menu__lang-list--visible")) {
                langList.classList.remove("main-menu__lang-list--visible");
            }
            this.removeEventListener("scroll", retirar);
        }
        langList.classList.toggle("main-menu__lang-list--visible");
    });
}
langNav();

let arrLang = 
{
    "es":
    {
        //Menú ============================================================================
        "inicio": "INICIO",
        "evento": "EVENTO",
        "comites": "COMITÉS",
        "inscripcion": "INSCRÍBETE",

        //Footer ==========================================================================
        "footerTituloContacto": "Contacto",
        "footerPolitica": "Política de Privacidad",

        //General =========================================================================
        "nombreOficial": "MUNIMM 9NA EDICIÓN",

        //Inicio ==========================================================================
        "inicioTexto": "AQUÍ VA TU <wbr>PRESENTACIÓN<br> <span>EXTRAORDINARIA</span>",

        "introTitulo": "¿Que te gustaría <br>decir?",
        "introTexto": "Muestra todo sobre tu sobre tu negocio en tu página web, consigue más clientes y genera nuevas posibilidades",

        "puntosTitulo": "¿Qué te ofrecemos?",
        "puntosTitulo1": "Experiencias<br>Únicas",
        "puntosTexto1": "Encontrarás con nosotros una gran comunidad que comparte tus objetivos",
        "puntosTitulo2": "Calidad<br>Inigualable",
        "puntosTexto2": "Buscamos darte lo mejor, desde nuestras mesas hasta los servicios que te ofrecemos",
        "puntosTitulo3": "Modelo<br>Híbrido",
        "puntosTexto3": "Nos preocupamos por tu salud y buscamos que estés lo más cómodo posible con nosotros",

        "opinion1": "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Itaque consectetur, saepe delectus provident eius at quisquam dolor sint repudiandae aut.",
        "opinion2": "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Itaque consectetur, saepe delectus provident eius at quisquam dolor sint repudiandae aut.",
        "opinion3": "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Itaque consectetur, saepe delectus provident eius at quisquam dolor sint repudiandae aut.",

        "patrocinadoresTitulo": "Patrocinadores",
        "patrocinadoresLink": "Conviertete en nuestro patrocinador <i class='bi bi-arrow-right'></i>",

        //Patrocinador ====================================================================
        "patrocinadorTitulo": "Conviertete en Patrocinador",
        
        //Evento ==========================================================================
        "eventoTitulo": "Te esperamos en <br><span class='nta-title nta-title-lg'>Abril</span>",
        "eventoDia1": "Jueves",
        "eventoDia2": "Viernes",
        "eventoDiaL1": "Jueves 7",
        "eventoDiaL2": "Viernes 8",

        "agendaDiLTitulo": "Día",
        "agendaTitulo1": "Jueves 7 de Abril de 2022",
        "agendaSubtitulo": "Agenda",

        "agenda1evento1": "Llegada de Delegados (Gimnasio)",
        "agenda1evento2": "Registro y movilización",
        "agenda1evento3": "Ceremonia (Gimnasio)",
        "agenda1evento4": "Movilización a salones",
        "agenda1evento5": "Primera Sesión",
        "agenda1evento6": "Descanso",
        "agenda1evento7": "Segunda Sesión",
        "agenda1evento8": "Descanso",
        "agenda1evento9": "Tercera Sesión",
        "agenda1evento10": "Evento Social",

        "agendaTitulo2": "Viernes 8 de Abril de 2022",

        "agenda2evento1": "Llegada de Delegados (Gimnasio)",
        "agenda2evento2": "Ponencia ONU",
        "agenda2evento3": "Desayuno (Multiusos y patio)",
        "agenda2evento4": "Cuarta Sesión",
        "agenda2evento5": "Descanso",
        "agenda2evento6": "Quinta Sesión",
        "agenda2evento7": "Descanso",
        "agenda2evento8": "Sexta Sesión",
        "agenda2evento9": "Comida (Multiusos y patio)",
        "agenda2evento10": "Séptima Sesión",
        "agenda2evento11": "Descanso",
        "agenda2evento12": "Octava Sesión",
        "agenda2evento13": "Movilización (Gimnasio)",
        "agenda2evento14": "Ceremonia de clausura (Gimnasio)",

        "callToAction": "Vive el MUNIMM<br>como nunca antes",

        "highTitulo": "Alto Comando",
        "highCoordintation1": "Coordinación Logística",
        "highCoordintation2": "Coordinación General",
        "highCoordintation3": "Coordinación Académica",

        //Comités =========================================================================
        "comitesTitulo": "ELIGE TU COMITÉ <br>SE EL CAMBIO QUE DESEAS",

        "comitesGridTitulo": "Comités",

        "comitesTipo1": "Español",
        "comitesTipo2": "Inglés",
        "comitesTipo3": "Comités Especiales", 

        "comitesAb1": "ECOSOC",
        "comitesNombreModalidad1": "Nombre del comité<br><span>Preparatoria / Online</span></span>",
        "recursosTitulo": "Recursos",
        "recurso1": "Código de vestimenta",
        "recurso2": "Lineamientos Generales",

        //Comité ==========================================================================
        "comiteTituloP": "ECOSOC",
        "comiteDescripcionTitulo": "Descripción",
        "comiteDescripcion": "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quia nulla quod sed. Aliquid aperiam nulla odit. Soluta repudiandae molestias, hic molestiae perferendis aperiam minus accusamus saepe mollitia sunt est ipsum!",
        "comiteInscripcion": "Inscribirse",
        "comiteModalidadTitulo": "Modalidad",
        "comiteMesaTitulo":"Mesa",

        //Inscripción =====================================================================
        "inscripcionTitulo": "¡Inscríbete!",
        "inscripcionTexto": "Llena el formulario <br>Selecciona el comité al que deseas participar <br>Espera a que nosotros te contactemos<br><b>¡Y únete!",
        "inscripcionContactoTitulo": "Información de contacto",
        "inscripcionDelegadoTitulo": "Información de delegado",
        "inscripcionPagoTitulo": "Información de pago",

        //Placeholders ====================================================================
        "placeholderName": "Nombre",
        "placeholderEmpresa": "Empresa",
        "placeholderCorreo": "Correo",
        "placeholderContribucion": "¿Cómo deseas contribuir?",
        "placeholderTelefono": "Teléfono",
        "placeholderComite": "Comité",
        "placeholderPais": "Pais/Delegación",

        "placeholderNumeroTarjeta": "Número de Tarjeta",
        "placeholcerNombreTarjeta": "Nombre del Titular",
        "placeholderCVV": "CVV",
        "placeholderMesTarjeta": "Mes",
        "placehoolderYearTarjeta": "Año",

        "btnEnviar": "Enviar",
        "btnContinuar": "Continuar"
    },

    "en":
    {
        //Menú ============================================================================
        "inicio": "HOME",
        "evento": "EVENT",
        "comites": "COMMITTEES",
        "inscripcion": "INSCRIPTION",

        //Footer ==========================================================================
        "footerTituloContacto": "Contact",
        "footerPolitica": "Privacy Policy",

        //General =========================================================================
        "nombreOficial": "MUNIMM 9TH EDITION",
        
        //Inicio ==========================================================================
        "inicioTexto": "HERE IS YOUR PRESENTATION<br><span>EXTRAORDINARY</span>",

        "introTitulo": "¿What is<br>MUNIMM?",
        "introTexto": "THE “MUNIMM” is an adapted simulation of the operations carried out in the distinguished organization of the United Nations (UN), which emulates real committees of this organization on a smaller scale.",

        "puntosTitulo": "What do we offer you?",
        "puntosTitulo1": "Unique<br>Experiences",
        "puntosTexto1": "You will find with us a great community that shares your goals",
        "puntosTitulo2": "Great<br>Quality",
        "puntosTexto2": "We seek to give you the best, from our chairs to the services we offer you",
        "puntosTitulo3": "Hybrid<br>Model",
        "puntosTexto3": "We care about your health and we want you to be as comfortable as possible with us",

        "opinion1": "Lorem english, ipsum dolor sit amet consectetur adipisicing elit. Itaque consectetur, saepe delectus provident eius at quisquam dolor sint repudiandae aut.",
        "opinion2": "Lorem english, ipsum dolor sit amet consectetur adipisicing elit. Itaque consectetur, saepe delectus provident eius at quisquam dolor sint repudiandae aut.",
        "opinion3": "Lorem english, ipsum dolor sit amet consectetur adipisicing elit. Itaque consectetur, saepe delectus provident eius at quisquam dolor sint repudiandae aut.",

        "patrocinadoresTitulo": "Sponsors",
        "patrocinadoresLink": "Become our sponsor <i class='bi bi-arrow-right'></i>",

        //Patrocinador ====================================================================
        "patrocinadorTitulo": "Become our sponsor",

        //Evento ==========================================================================
        "eventoTitulo": "See you in <br><span class='nta-title nta-title-xl'>April</span>",
        "eventoDia1": "Thursday",
        "eventoDia2": "Friday",
        "eventoDiaL1": "Thursday 7",
        "eventoDiaL2": "Friday 8",

        "agendaDiLTitulo": "Day",
        "agendaTitulo1": "Thursday April 7 2022",
        "agendaSubtitulo": "Schedule",

        "agenda1evento1": "Arrival of Delegates (Gym)",
        "agenda1evento2": "Registration and mobilization",
        "agenda1evento3": "Ceremony (Gym)",
        "agenda1evento4": "Mobilization to classrooms",
        "agenda1evento5": "First Session",
        "agenda1evento6": "Coffee Break",
        "agenda1evento7": "Second Session",
        "agenda1evento8": "Coffee Break",
        "agenda1evento9": "Third Session",
        "agenda1evento10": "Social Event",

        "agendaTitulo2": "Friday April 8 2022",
        
        "agenda2evento1": "Arrival of Delegates (Gym)",
        "agenda2evento2": "UN Presentation",
        "agenda2evento3": "Breakfast (multipurpose room and yard)",
        "agenda2evento4": "Fourth session",
        "agenda2evento5": "Coffee Break",
        "agenda2evento6": "Fifth Session",
        "agenda2evento7": "Coffee Break",
        "agenda2evento8": "Sixth session",
        "agenda2evento9": "Meal (multipurpose room and yard)",
        "agenda2evento10": "Seventh Session",
        "agenda2evento11": "Coffee Break",
        "agenda2evento12": "Eighth Session",
        "agenda2evento13": "Mobilization (Gym)",
        "agenda2evento14": "Closing ceremony (Gym)",

        "callToAction": "Live the MUNIMM <br>like never before",

        "highTitulo": "High Command",
        "highCoordintation1": "Logistics Coordination",
        "highCoordintation2": "General Coordination",
        "highCoordintation3": "Academics Coordination",

        //Comités =========================================================================
        "comitesTitulo": "CHOOSE YOUR COMMITTEE <br> BE THE CHANGE YOU WANT",

        "comitesGridTitulo": "Committees",
        "comitesTipo1": "Spanish",
        "comitesTipo2": "English",
        "comitesTipo3": "Special Committees", 

        "comitesAb1": "ECOSOC",
        "comitesNombreModalidad1": "Committee Name<br><span>High School / Online</span>",

        "recursosTitulo": "Resources",
        "recurso1": "Dress Code",
        "recurso2": "General Guidelines",

        //Comité ==========================================================================
        "comiteTituloP": "ECOSOC",
        "comiteDescripcionTitulo": "Description",
        "comiteDescripcion": "Lorem english, ipsum dolor sit amet consectetur adipisicing elit. Quia nulla quod sed. Aliquid aperiam nulla odit. Soluta repudiandae molestias, hic molestiae perferendis aperiam minus accusamus saepe mollitia sunt est ipsum!",
        "comiteInscripcion": "Register",
        "comiteModalidadTitulo": "Modality",
        "comiteMesaTitulo":"Chair",

        //Inscripción =====================================================================
        "inscripcionTitulo": "Sign Up!",
        "inscripcionTexto": "Fill out the form<br>Select the committee you want to participate in<br>Wait for us to contact you<br><b>And Join Us!</b>",
        "inscripcionContactoTitulo": "Contact Information",
        "inscripcionDelegadoTitulo": "Delegate Information",
        "inscripcionPagoTitulo": "Payment Information",

        //Placeholders ====================================================================
        "placeholderName": "Name",
        "placeholderEmpresa": "Company",
        "placeholderCorreo": "Mail",
        "placeholderContribucion": "How do you want to contribute?",
        "placeholderTelefono": "Phone",
        "placeholderComite": "Committee",
        "placeholderPais": "Country/Delegation",

        "placeholderNumeroTarjeta": "Card number",
        "placeholcerNombreTarjeta": "Name on Card",
        "placeholderCVV": "Security Code",
        "placeholderMesTarjeta": "Month",
        "placehoolderYearTarjeta": "Year",

        "btnEnviar": "Send",
        "btnContinuar": "Continue"
    }
}
/*
const langTranslate = () =>
{
    const lang = document.querySelector(".translate");
    const langList = document.getElementById("main-menu__lang-list");
    const langText = document.querySelector(".main-menu__lang-button h3")

    if(sessionStorage.getItem("lang") == "en")
    {
        document.addEventListener("DOMContentLoaded", function() {
            langText.textContent = "EN";
            let language = "en";

            let elementos = document.getElementsByClassName("lang");

            for (let i=0; i<elementos.length; i++){

                if((elementos[i].nodeName == "INPUT" && elementos[i].getAttribute("type") == "text") || elementos[i].nodeName == "TEXTAREA")
                {
                    elementos[i].placeholder = arrLang[language][elementos[i].getAttribute("key")];
                }
                else if(elementos[i].nodeName == "INPUT" && (elementos[i].getAttribute("type") == "submit" || elementos[i].getAttribute("type") == "button"))
                {
                    elementos[i].value = arrLang[language][elementos[i].getAttribute("key")];
                }
                else{
                    elementos[i].innerHTML = arrLang[language][elementos[i].getAttribute("key")];
                }
                
        
            }
        });
        
    }
    else{
        document.addEventListener("DOMContentLoaded", function() {
            langText.textContent = "ES";
            let language = "es";

            let elementos = document.getElementsByClassName("lang");

            for (let i=0; i<elementos.length; i++){

                if((elementos[i].nodeName == "INPUT" && elementos[i].getAttribute("type") == "text") || elementos[i].nodeName == "TEXTAREA")
                {
                    elementos[i].placeholder = arrLang[language][elementos[i].getAttribute("key")];
                }
                else if(elementos[i].nodeName == "INPUT" && (elementos[i].getAttribute("type") == "submit" || elementos[i].getAttribute("type") == "button"))
                {
                    elementos[i].value = arrLang[language][elementos[i].getAttribute("key")];
                }
                else{
                    elementos[i].innerHTML = arrLang[language][elementos[i].getAttribute("key")];
                }
                
        
            }
        });
    }

    lang.addEventListener("click", function (p) {

        langList.classList.toggle("main-menu__lang-list--visible");

        langText.textContent = p.target.textContent;
        lang.id = p.target.textContent.toLowerCase();

        sessionStorage.setItem("lang", lang.id);

        let language = lang.id;

        let elementos = document.getElementsByClassName("lang");

        for (let i=0; i<elementos.length; i++){
            
            if((elementos[i].nodeName == "INPUT" && elementos[i].getAttribute("type") == "text") || elementos[i].nodeName == "TEXTAREA")
            {
                elementos[i].placeholder = arrLang[language][elementos[i].getAttribute("key")];
            }
            else if(elementos[i].nodeName == "INPUT" && (elementos[i].getAttribute("type") == "submit" || elementos[i].getAttribute("type") == "button"))
                {
                    elementos[i].value = arrLang[language][elementos[i].getAttribute("key")];
                }
            else{
                elementos[i].innerHTML = arrLang[language][elementos[i].getAttribute("key")];
            }
            
        }
    });
}

langTranslate();


*/