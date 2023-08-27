const socket = new WebSocket('ws://localhost:3000');

document.getElementById("mark-all-read-btn").onclick = function() {
    document.getElementById("notifications").style.display = "none";
    document.getElementById("mark-all-read-btn").style.display = "none";
}
socket.addEventListener('open', (event) => {
console.log('Connected to server');
});

socket.addEventListener('message', (event) => {
const data = JSON.parse(event.data);
const { type, payload } = data;

switch (type) {
    case 'message':
    addMessageToChat(payload);
    break;

    case 'userList':
    updateUserList(payload);
    break;

    default:
    break;
}
});

function addMessageToChat(message) {
const chat = document.querySelector('#chat');
const messageEl = document.createElement('div');
messageEl.className = 'message';
messageEl.innerHTML = `
    <span class="message-user">${message.user}</span>
    <span class="message-time">${formatDate(message.time)}</span>
    <div class="message-text">${message.text}</div>
`;
chat.appendChild(messageEl);
}

function updateUserList(users) {
const userList = document.querySelector('#user-list');
userList.innerHTML = '';
users.forEach((user) => {
    const userEl = document.createElement('li');
    userEl.textContent = user;
    userList.appendChild(userEl);
});
}

function sendMessage() {
const inputEl = document.querySelector('#chat-input');
const text = inputEl.value.trim();
if (text === '') {
    return;
}
const message = {
    type: 'message',
    payload: { user: 'You', text, time: new Date() },
};
socket.send(JSON.stringify(message));
inputEl.value = '';
}

function formatDate(date) {
const hours = date.getHours().toString().padStart(2, '0');
const minutes = date.getMinutes().toString().padStart(2, '0');
return `${hours}:${minutes}`;
}

// Add event listener to send button
const sendBtn = document.querySelector('#send-btn');
sendBtn.addEventListener('click', sendMessage);

// Add event listener to input field to send message on pressing Enter key
const inputEl = document.querySelector('#chat-input');
inputEl.addEventListener('keydown', (event) => {
if (event.key === 'Enter') {
    sendMessage();
}
});


// ==================================================================================================================



// Add event listener to form submit button
// document.querySelector(".send-btn").addEventListener("click", function(event) {
//     event.preventDefault();
//     sendMessage();
// });

// Send message function
function sendMessage() {
    // Get input message value
    const input = document.getElementById('msg');
    const message = input.value;

    // Create new message div
    const newMessage = document.createElement("div");
    newMessage.classList.add("message");

    // Create user profile div
    const userProfile = document.createElement("div");
    userProfile.classList.add("user-profile");

    // Create username paragraph
    const username = document.createElement("p");
    username.classList.add("username");
    username.innerHTML = "Me:";

    // Create message text paragraph
    const text = document.createElement("p");
    text.classList.add("text");
    text.innerHTML = message;

    // Create message timestamp paragraph
    const timestamp = document.createElement("p");
    timestamp.classList.add("timestamp");
    timestamp.innerHTML = new Date().toLocaleTimeString('en-US', { hour12: false });

    // Append all elements to the new message div
    userProfile.appendChild(username);
    newMessage.appendChild(userProfile);
    newMessage.appendChild(text);
    newMessage.appendChild(timestamp);

    // Append the new message div to the chat messages div
    document.querySelector(".chat-messages").appendChild(newMessage);

    // Clear input field
    input.value = "";
}

// Remove notification function
function remove_noti() {
    document.getElementById("notification-msg").innerHTML = "You have no new messages.";
}
