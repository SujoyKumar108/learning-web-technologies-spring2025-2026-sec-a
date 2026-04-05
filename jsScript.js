document.getElementById("myForm").addEventListener("submit", function(event) {

    event.preventDefault();
    let username = document.getElementById("username").value.trim();
    let password = document.getElementById("password").value;
    let email = document.getElementById("email").value;
    let dob = document.getElementById("dob").value;
    let id = document.getElementById("id").value;
    let dept = document.getElementById("dept").value;
    let address = document.getElementById("address").value.trim();

    let gender = document.getElementsByName("gender");

    // Username
    if (username === "") {
        alert("Username is required");
        event.preventDefault();
        return;
    }

    for (let i = 0; i < username.length; i++) {
        let ch = username[i];
        if (!(ch >= 'A' && ch <= 'Z') && !(ch >= 'a' && ch <= 'z')) {
            alert("Only letters allowed");
            event.preventDefault();
            return;
        }
    }

    // Password
    if (password.length < 6) {
        alert("Password must be at least 6 characters");
        // event.preventDefault();
        return;
    }

    // Email
    if (!email.includes("@")) {
        alert("Enter valid email");
        // event.preventDefault();
        return;
    }

    // DOB
    if (dob === "") {
        alert("Select date of birth");
        // event.preventDefault();
        return;
    }

    // ID
    if (id === "" || id <= 0) {
        alert("Enter valid ID");
        // event.preventDefault();
        return;
    }

    // Gender
    let selected = false;
    for (let i = 0; i < gender.length; i++) {
        if (gender[i].checked) {
            selected = true;
        }
    }
    if (!selected) {
        alert("Select gender");
        // event.preventDefault();
        return;
    }

    // Department
    if (dept === "") {
        alert("Select department");
        
        return;
    }

    // Address
    if (address === "") {
        alert("Address is required");
        // event.preventDefault();
        return;
    }

    let tableBody = document.getElementById("dataTable").getElementsByTagName("tbody")[0];

    tableBody.innerHTML += `
        <tr>
            <td>${username}</td>
            <td>${password}</td>
            <td>${email}</td>
            <td>${dob}</td>
            <td>${id}</td>
            <td>${gender}</td>
            <td>${dept}</td>
            <td>${address}</td>
        </tr>
    `;

    // Clear form after submission
    document.getElementById("myForm").reset();

});