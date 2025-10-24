const form = document.getElementById('userForm');

form.addEventListener('submit', function(event) {
    event.preventDefault(); // форма жіберуді тоқтату

    const name = document.getElementById('name').value;
    const email = document.getElementById('email').value;
    const phone = document.getElementById('phone').value;
    const message = document.getElementById('message').value;

    console.log(`Name: ${name}, Email: ${email}, Phone: ${phone}, Message: ${message}`);

    // Output div-ке шығару
    const output = document.getElementById('output');
    output.innerHTML = `
        <p><strong>Name:</strong> ${name}</p>
        <p><strong>Email:</strong> ${email}</p>
        <p><strong>Phone:</strong> ${phone}</p>
        <p><strong>Message:</strong> ${message}</p>
    `;

    form.reset(); // формадағы input-тарды тазалау
});