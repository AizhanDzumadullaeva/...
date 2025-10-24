const form = document.getElementById('userForm');

form.addEventListener('submit', function(event) {
    event.preventDefault(); // форма жіберуді тоқтату

    const name = document.getElementById('name').value;
    const email = document.getElementById('email').value;

    console.log(`Name: ${name}, Email: ${email}`);

    form.reset(); // формадағы input-тарды тазалау
});