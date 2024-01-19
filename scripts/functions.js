//Variable globale
let teacherEmail = "gregtom96@gmail.com"

function openEmail(teacherEmail, classDate, classTime){
    let mailto = `mailto:${teacherEmail}?subject=Appointment for English class&body=Hi ! I would like to have a class with you on ${classDate} at ${classTime} Thank you for your confirmation !`
    location.href = mailto
}

function getTeacherEmail(teacherName){
    switch (teacherName){
        case "Rocio":
            teacherEmail = "rocioaruarte69@gmail.com"
            break
    }
    return teacherEmail
}

function firstStep(){
    //On récupère le type de classe renseigné par l'utilisateur 
    let baliseClass = document.getElementById("class")
    let classSelected = baliseClass.value
    console.log(classSelected)

    //On récupère le nom du prof selectionné
    let baliseTeacher = document.getElementById("teacher")
    let teacherName = baliseTeacher.value
    console.log(teacherName)
    //On récupère l'email du prof sélectionné
    teacherEmail = getTeacherEmail(teacherName)

    //Si l'utilisateur a selectionné "lesson", on affiche les boutons Paypal
    if(classSelected==="lesson"){

        console.log("vous avez choisi une lesson")

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
    //Si l'utilisateur a selectionné "introduction", on affiche l'agenda du prof selectionné
    else if(classSelected==="introduction"){

        console.log("vous avez choisi un cours d'introduction")

        let baliseSection = document.querySelector("section")

        let contenu = `
        <iframe src="https://calendar.google.com/calendar/embed?src=rocioaruarte69%40gmail.com&ctz=America%2FArgentina%2FSalta" style="border: 0" width="600" height="400" frameborder="0" scrolling="no"></iframe>
        <form method="get" action="">
            <p>
                <label for="date">Choose a schedule for your class</label>
                <input type="date" id="date" name="date" required>
            </p>
            <p>
                <label for="time">At what time ?</label>
                <input type="time" id="time" name="time" required>
            </p>
            <p>
                <button onclick="secondStep()">Reserve your class</button>
            </p>
        </form>`
        baliseSection.innerHTML = contenu
    }
}

function secondStep(){

    let baliseDate = document.getElementById("date")
    let DateSelected = baliseDate.value
    console.log(DateSelected)

    let baliseTime = document.getElementById("time")
    let TimeSelected = baliseTime.value
    console.log(TimeSelected)

    openEmail(teacherEmail, DateSelected, TimeSelected)
}