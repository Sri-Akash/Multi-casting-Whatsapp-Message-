const accountSid = "AC3d462d53594610c48202383ad711ee2c";
const authToken = "c9d55c6b8520defc04e7a65230183265";
const client = require('twilio')(accountSid, authToken);

client.messages
      .create({from: '+15557122661', body: 'Hi there', to: '+7695978704'})
      .then(message => console.log(message.sid));