function remove_noti() {
    document.getElementById("notification-msg").style.display = "none";
    document.getElementById("mark-all-read-btn-id").style.visibility = 'hidden';
}

function formatAMPM() {
    let date = new Date();
    var hours = date.getHours();
    var minutes = date.getMinutes();
    var ampm = hours >= 12 ? 'PM' : 'AM';
    hours = hours % 12;
    hours = hours ? hours : 12; // the hour '0' should be '12'
    minutes = minutes < 10 ? '0'+minutes : minutes;
    var strTime = hours + ':' + minutes + ' ' + ampm;
    return strTime;
}

document.getElementById("practice").textContent= formatAMPM();

function sendMessage() {
    // Get input message value
    const input = document.getElementById('msg');
    const message = input.value;

    if(message==''){
        console.log("Can't Sent empty message");
    }
    else{
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
        timestamp.innerHTML = formatAMPM();

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
}
function leave_group(){
    
}