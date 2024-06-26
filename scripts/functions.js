//Variables globales
let teacherName = "Greg"
let languageSelected = "none"

function openEmail(teacherEmail, classDate, classTime, languageSelected){
    if(languageSelected !== "none"){ //dans le cas d'un cours normal
        let mailto = `mailto:${teacherEmail}?subject=Appointment for English class&body=Hi ! I would like to have a ${languageSelected} class with you on ${classDate} at ${classTime} Thank you for your confirmation !`
        location.href = mailto
    }
    else{ //dans le cas d'un cours d'introduction
        let mailto = `mailto:${teacherEmail}?subject=Appointment for English class&body=Hi ! I would like to have an introduction class with you on ${classDate} at ${classTime} Thank you for your confirmation !`
        location.href = mailto
    }
}

function getTeacherEmail(teacherName){
    let teacherEmail = "gregtom96@gmail.com"
    switch (teacherName){
        case "Greg":
            teacherEmail = "gregtom96@gmail.com"
            break
    }
    return teacherEmail
}

function teacherRegister(){
    let radios = document.querySelectorAll('input[type="radio"][name="profile"]')

    radios.forEach(function(radio) {
        radio.addEventListener('change', function() {
            // La fonction à exécuter lorsque la sélection change
            console.log("Bouton radio sélectionné :", radio.value);
            if(radio.value==="teacher"){
                let elementBefore = document.querySelector(".radio")
                let baliseDiv = document.createElement("div")
                baliseDiv.classList.add("item", "languages")
                elementBefore.insertAdjacentElement('afterend', baliseDiv);

                let baliseSpan = document.createElement("span")
                baliseSpan.textContent = "Check languages you want to teach : "
                baliseDiv.appendChild(baliseSpan)

                let baliseInputEnglish = document.createElement("input")
                baliseInputEnglish.type = "checkbox"
                baliseInputEnglish.name = "english"
                baliseInputEnglish.id = "english"
                baliseDiv.appendChild(baliseInputEnglish)

                let baliseLabelEnglish = document.createElement("label")
                baliseLabelEnglish.htmlFor = "english"
                baliseLabelEnglish.textContent = "English" 
                baliseDiv.appendChild(baliseLabelEnglish)

                let baliseInputFrench = document.createElement("input")
                baliseInputFrench.type = "checkbox"
                baliseInputFrench.name = "french"
                baliseInputFrench.id = "french"
                baliseDiv.appendChild(baliseInputFrench)

                let baliseLabelFrench = document.createElement("label")
                baliseLabelFrench.htmlFor = "french"
                baliseLabelFrench.textContent = "French" 
                baliseDiv.appendChild(baliseLabelFrench)

                let baliseInputSpanish = document.createElement("input")
                baliseInputSpanish.type = "checkbox"
                baliseInputSpanish.name = "spanish"
                baliseInputSpanish.id = "spanish"
                baliseDiv.appendChild(baliseInputSpanish)

                let baliseLabelSpanish = document.createElement("label")
                baliseLabelSpanish.htmlFor = "spanish"
                baliseLabelSpanish.textContent = "Spanish" 
                baliseDiv.appendChild(baliseLabelSpanish)
            }
        });
    });
}

function chooseYourClass(){
    let baliseClass = document.getElementById('class')
    let baliseSection = document.querySelector("section")

    baliseClass.addEventListener("change", function(){
        let classSelected = baliseClass.value
        console.log("vous avez choisi le type de classe suivant :", classSelected)

        //Si l'utilisateur a selectionné "lesson", on affiche les boutons Paypal
        if(classSelected==="lesson"){
            //On efface le contenu de section
            let contenu = ``;
            let baliseSection = document.querySelector("section")
            baliseSection.innerHTML = contenu

            let boutonPaypal = document.createElement("div")
            boutonPaypal.id = "paypal-button-container"

            let baliseScript = document.createElement("script")
            baliseScript.src = "../scripts/paiement.js"
            
            baliseSection.appendChild(boutonPaypal)
            baliseSection.appendChild(baliseScript)
        }

        //Si l'utilisateur a selectionné "introduction", on ne laisse pas choisir la langue
        else if(classSelected==="introduction"){
            let contenu = `
            <p>
                <label for="teacher">Choose your teacher :</label>
                <select name="teacher" id="teacher" required>
                    <option></option>
                    <option value="Greg">Greg</option>
                </select>
            </p>
            `
            baliseSection.innerHTML = contenu
            checkCalendar()
        }
    })
}

function chooseYourTeacher(){
    let baliseLanguage = document.getElementById('language')
    let baliseSection = document.querySelector("section")

    baliseLanguage.addEventListener("change", function(){
        languageSelected = baliseLanguage.value
        console.log("vous avez choisi la langue suivante :", languageSelected)

        //A TERME : récupérer dans la bdd tous les profs enseignant la langue choisie

        let contenu = `
        <p>
            <label for="teacher">Choose your teacher :</label>
            <select name="teacher" id="teacher" required>
                <option></option>
                <option value="Greg">Greg</option>
            </select>
        </p>
        `
        baliseSection.innerHTML = contenu
        checkCalendar()
    })
}

function checkCalendar(){
    let baliseTeacher = document.getElementById('teacher')
    let baliseSection = document.querySelector("section")

    baliseTeacher.addEventListener("change", function(){
        teacherName = baliseTeacher.value //teacherName est une variable globale
        console.log("vous avez choisi le prof suivant :", teacherName)

        if(teacherName === "Greg"){

            console.log("le calendrier de Greg doit s'afficher")

            let calendar = `
            <iframe src="https://calendar.google.com/calendar/embed?src=gregtom96%40gmail.com&ctz=America%2FArgentina%2FBuenos_Aires" style="border: 0" width="600" height="400" frameborder="0" scrolling="no"></iframe>
            `
            baliseSection.innerHTML = calendar
        }
        //else if pour les autres profs

        baliseForm = document.createElement("form")
        baliseForm.method = "get"
        baliseForm.action = ""
        baliseSection.appendChild(baliseForm)

        let contenu = `
            <p> 
                <em>Check the teacher's calendar above for availability.</em>
            </p>
            <p>
                <label for="date">Choose a schedule for your class</label>
                <input type="date" id="date" name="date" required>
            </p>
            <p>
                <label for="time">At what time ?</label>
                <input type="time" id="time" name="time" required>
            </p>
            <p>
                <button onclick="reserveYourClass(teacherName)">Reserve your class</button>
            </p>
            `
        baliseForm.innerHTML = contenu
    })
}

function reserveYourClass(teacherName){

    let baliseDate = document.getElementById("date")
    let DateSelected = baliseDate.value
    console.log(DateSelected)

    let baliseTime = document.getElementById("time")
    let TimeSelected = baliseTime.value
    console.log(TimeSelected)

    let teacherEmail = getTeacherEmail(teacherName)
    openEmail(teacherEmail, DateSelected, TimeSelected, languageSelected)
}