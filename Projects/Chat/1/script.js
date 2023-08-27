// select DOM elements
const messageInput = document.getElementById('message-input');
const messageList = document.getElementById('message-list');
const sendButton = document.getElementById('send-button');
const sendFileButton = document.getElementById('send-file-button');
const modal = document.getElementById('modal');
const closeModalButton = document.getElementById('close-modal-button');
const form = document.getElementById('modal-form');
const fileInput = document.getElementById('file-input');

// create a new WebSocket object

const socket = new WebSocket('ws://localhost:3000');

// handle WebSocket events
socket.addEventListener('open', () => {
console.log('WebSocket connection established');
});

socket.addEventListener('message', (event) => {
console.log(`WebSocket message received: ${event.data}`);
const message = JSON.parse(event.data);
appendMessage(message);
});

socket.addEventListener('close', () => {
console.log('WebSocket connection closed');
});

// send message to WebSocket server
function sendMessage() {
const message = messageInput.value.trim();
if (message) {
    const data = {
    type: 'text',
    content: message,
    timestamp: Date.now(),
    };
    socket.send(JSON.stringify(data));
    appendMessage(data);
    messageInput.value = '';
}
}

// append message to message list
function appendMessage(message) {
const messageItem = document.createElement('li');
if (message.type === 'text') {
    messageItem.innerText = message.content;
} else if (message.type === 'file') {
    const fileLink = document.createElement('a');
    fileLink.href = message.content;
    fileLink.target = '_blank';
    fileLink.innerText = 'Download file';
    messageItem.appendChild(fileLink);
}
messageList.appendChild(messageItem);
}

// open modal to send a file
function openModal() {
modal.style.display = 'block';
}

// close modal to send a file
function closeModal() {
modal.style.display = 'none';
}

// send file to WebSocket server
function sendFile() {
const file = fileInput.files[0];
const reader = new FileReader();
reader.onload = () => {
    const data = {
    type: 'file',
    content: reader.result,
    timestamp: Date.now(),
    };
    socket.send(JSON.stringify(data));
    appendMessage(data);
    closeModal();
};
reader.readAsDataURL(file);
}

// add event listeners to DOM elements
sendButton.addEventListener('click', sendMessage);
sendFileButton.addEventListener('click', openModal);
closeModalButton.addEventListener('click', closeModal);
form.addEventListener('submit', (event) => {
event.preventDefault();
sendFile();
});
