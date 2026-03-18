// export function contactForm() {
//     const form = document.querySelector("#contactForm");
//     const feedBack = document.querySelector("#feedback");

//     function regForm(event) {
//         event.preventDefault();
//         const thisform = event.currentTarget;

//         const formdata = 
//             "name=" + thisform.elements.name.value +
//             "&email=" + thisform.elements.email.value +
//             "&msg=" + thisform.elements.msg.value;

//         console.log(formdata);

//         fetch('sendmail.php', {
//             method: 'POST',
//             body: formdata,
//             headers: { 'Content-Type': 'application/x-www-form-urlencoded' }
//         })
//         .then(response => {
//                 console.log('Status:', response.status);
//                 return response.text();
//         })
//         .then(data => {
//             console.log('Raw response:', data);
//             if(data.status === 'success') {
//                 feedBack.textContent = data.message;
//                 feedBack.classList.add('success');
//                 form.reset();
//             } else {
//                 feedBack.textContent = data.message;
//                 feedBack.classList.add('error');
//             }
//         })
//         .catch(error => {
//             feedBack.textContent = 'Something went wrong!';
//             console.error('Fetch error:', error);
//         });
//     }

//     form.addEventListener("submit", regForm);
// }
export default {
  data() {
    return {
      formData: {
        name: '',
        email: '',
        message: ''
      },
      feedbackMessage: '',
      feedbackClass: ''
    };
  },
  methods: {
    regForm(event) {
      const formdata = 
        "name=" + this.formData.name +
        "&email=" + this.formData.email +
        "&message=" + this.formData.message;
      
      console.log(formdata);
      fetch('/api/contact', {
        method: 'POST',
        body: formdata,
        headers: { 
          'Content-Type': 'application/x-www-form-urlencoded'
        }
      })
      .then(response => {
        console.log('Status:', response.status);
        return response.json();
      })
      .then(data => {
        console.log('Response:', data);
        if(data.status === 'success') {
          this.feedbackMessage = data.message;
          this.feedbackClass = 'success';
          this.formData = { name: '', email: '', message: '' };
        } else {
          this.feedbackMessage = data.message;
          this.feedbackClass = 'error';
        }
      })
      .then(response => {
        console.log('Status:', response.status);
        if (!response.ok) {
          throw new Error(`HTTP error! status: ${response.status}`);
        }
        return response.json();
      })
      .catch(error => {
        this.feedbackMessage = 'Something went wrong!';
        this.feedbackClass = 'error';
        console.error('Fetch error:', error);
      });
    }
  }
};
