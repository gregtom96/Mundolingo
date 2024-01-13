/*function openEmail(teacherEmail, classDate, classTime){
    let mailto = `mailto:${teacherEmail}?subject=Appointment for English class&body=Hi ! I would like to have a class with you on ${classDate} at ${classTime} Thank you for your confirmation !`
    location.href = mailto
}*/

/*function getTeacherEmail(teacherName){
    let teacherEmail = ""
    switch (teacherName){
        case "Rocio":
            teacherEmail = "rocioaruarte69@gmail.com"
            break
        case "Carolina":
            teacherEmail = "gregzi96@gmail.com"
            break
        case "Gisele":
            teacherEmail = "gregzi96@gmail.com"
            break
    }
    return teacherEmail
}*/

function getInfos(){
    const form = document.querySelector("form")

    form.addEventListener("submit", (Event)=>{
        //On empêche le comportement par défaut
        Event.preventDefault()
        console.log("Il n'y a pas eu de rechargement de la page")

        //On récupère le type de classe renseigné par l'utilisateur 
        let baliseClass = document.getElementById("class")
        let classSelected = baliseClass.value
        console.log(classSelected)

        //On récupère le nom du prof selectionné
        let baliseTeacher = document.getElementById("teacher")
        let teacherName = baliseTeacher.value
        console.log(teacherName)

        //Si l'utilisateur a selectionné "lesson", on affiche les boutons Paypal
        if(classSelected==="lesson"){

            console.log("vous avez choisi une lesson")

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

            let contenu = `<p>Choose a schedule for your class :</p>
            <p>
                <em>Click on Google Agenda under the calendar.<br/>
                    Accept the teacher's calendar shared with you.<br/>
                    It should appear on the left section under "Other calendar".<br/>
                    Then add an event on the teacher's calendar and create a Google Meet link.<br/>
                    You're done !<br/>
                    Just wait for the teacher to confirm your appointment.
                </em>
            </p>`
            let baliseSection = document.querySelector("section")
            baliseSection.innerHTML = contenu

            let baliseFrame = document.createElement("iframe")
            baliseFrame.src = "https://calendar.google.com/calendar/embed?src=gregtom96%40gmail.com&ctz=America%2FArgentina%2FBuenos_Aires" 
            baliseFrame.style = "border: 0" 
            baliseFrame.width = "600" 
            baliseFrame.height = "400" 
            baliseFrame.frameborder = "0" 
            baliseFrame.scrolling = "no"
            
            baliseSection.appendChild(baliseFrame)
        }
    })
}

