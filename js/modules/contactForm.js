export function contactForm() {
    const form = document.querySelector("#contactForm");
    const feedBack = document.querySelector("#feedback");

    function regForm(event) {
        event.preventDefault();
        const thisform = event.currentTarget;

        const formdata = 
            "name=" + thisform.elements.name.value +
            "&org=" + thisform.elements.org.value +
            "&email=" + thisform.elements.email.value +
            "&msg=" + thisform.elements.msg.value;

        console.log(formdata);

        fetch('sendmail.php', {
            method: 'POST',
            body: formdata,
            headers: { 'Content-Type': 'application/x-www-form-urlencoded' }
        })
        .then(response => {
                console.log('Status:', response.status);
                return response.text();
        })
        .then(data => {
            console.log('Raw response:', data);
            if(data.status === 'success') {
                feedBack.textContent = data.message;
                feedBack.classList.add('success');
                form.reset();
            } else {
                feedBack.textContent = data.message;
                feedBack.classList.add('error');
            }
        })
        .catch(error => {
            feedBack.textContent = 'Something went wrong!';
            console.error('Fetch error:', error);
        });
    }

    form.addEventListener("submit", regForm);
}