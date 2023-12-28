const ics = require('ics')
// or, in ESM: import * as ics from 'ics'

const event = {
  start: [2023, 12, 9, 10, 0],
  duration: { hours: 1, minutes: 0 },
  title: 'English class',
  description: 'English class via Google Meet',
  status: 'CONFIRMED',
  busyStatus: 'BUSY',
  organizer: { name: "$_SESSION['LOGGED_USER']", email: "$_SESSION['LOGGED_USER_EMAIL']"},
  attendees: [
    { name: 'Greg', email: 'gregtom96@gmail.com', role: 'OPT-PARTICIPANT' }
  ]
}

ics.createEvent(event, (error, value) => {
  if (error) {
    console.log(error)
    return
  }

  console.log(value)
})