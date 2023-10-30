function openEmail(teacherEmail, studentName, classDate, classTime){
    let mailto = `mailto:${teacherEmail}?subject=Appointment for English class&body=Hi ! I'm ${studentName} and I would like to have a class with you on ${classDate} at ${classTime} Thank you for your confirmation !`
    location.href = mailto
}

function getTeacherEmail(teacherName){
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
}

function SendEmail(){
    const form = document.querySelector("form")

    form.addEventListener("submit", (Event)=>{
        //On empêche le comportement par défaut
        Event.preventDefault()
        console.log("Il n'y a pas eu de rechargement de la page")

        //On récupère les champs renseignés par l'utilisateur 
        let baliseName = document.getElementById("student")
        let studentName = baliseName.value
        console.log(studentName)
        
        let baliseDate = document.getElementById("date")
        let classDate = baliseDate.value
        console.log(classDate)
        
        let baliseTime = document.getElementById("time")
        let classTime = baliseTime.value
        console.log(classTime)

        let baliseTeacher = document.getElementById("teacher")
        let teacherName = baliseTeacher.value
        console.log(teacherName)

        let teacherEmail = getTeacherEmail(teacherName)

        openEmail(teacherEmail, studentName, classDate, classTime)
    })
}