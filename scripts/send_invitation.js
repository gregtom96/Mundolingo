/*import ical from 'ical-generator';*/

const ical = require('ical-generator');

function getIcalObjectInstance(starttime, endtime, summary, description, location, url , name ,email) {
    const cal = ical({ domain: "localhost/pages/reservation.php", name: 'My test calendar event' });
    cal.domain("localhost/pages/reservation.php");
    cal.createEvent({
            start: starttime,         // eg : moment()
            end: endtime,             // eg : moment(1,'days')
            summary: summary,         // 'Summary of your event'
            description: description, // 'More description'
            location: location,       // 'Delhi'
            url: url,                 // 'event url'
            organizer: {              // 'organizer details'
                name: name,
                email: email
            },
        });
    return cal;
}

var nodemailer = require("nodemailer");

var smtpTransport = nodemailer.createTransport({
   service: "Gmail",
   auth: {
       user: "gregzi96@gmail.com",
       pass: "rvkd dpyo yztm rpdh"
   }
});

async function sendemail(sendto, subject, htmlbody, calendarObj) {
    mailOptions = {
        to: sendto,
        subject: subject,
        html: htmlbody
    }
    if (calendarObj) {
            let alternatives = {
                "Content-Type": "text/calendar",
                "method": "REQUEST",
                "content": new Buffer(calendarObj.toString()),
                "component": "VEVENT",
                "Content-Class": "urn:content-classes:calendarmessage"
            }
    mailOptions['alternatives'] = alternatives;
    mailOptions['alternatives']['contentType'] = 'text/calendar'
    mailOptions['alternatives']['content'] 
        = new Buffer(calendarObj.toString())
    }
    smtpTransport.sendMail(mailOptions, function (error, response) {
            if (error) {
                console.log(error);
            } else {
                console.log("Message sent: " , response);
            }
    })
}
module.exports = {
    sendemail,
};