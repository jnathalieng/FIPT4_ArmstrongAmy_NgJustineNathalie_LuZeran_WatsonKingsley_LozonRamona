export default {
  data() {
    return {
      formData: {
        name: '',
        email: '',
        message: '',
        honeypot: '',
        testAnswer: ''
      },
      responseMessage: '',
      errors: {},
      buttonText: "Submit Message",
      submitted: false
    }
  },
  methods: {
    emptyForm() {
      return {
        name: '',
        email: '',
        message: '',
        honeypot: '',
        testAnswer: ''
      };
    },
    regForm(event) {
      event.preventDefault();
      this.submitForm();
    },
    submitForm() {
      const csrfMeta = document.querySelector('meta[name="csrf-token"]');
      const csrfToken = csrfMeta ? csrfMeta.getAttribute('content') : '';
      
      fetch('/contact', { 
        method: 'POST',
        headers: {
          'Content-Type': 'application/json',
          'X-CSRF-TOKEN': csrfToken
        },
        body: JSON.stringify(this.formData)
      })
      .then(res => res.json())
      .then(data => {
        if(data.errors) {
          this.errors = data.errors;
          this.responseMessage = '';
          return
        }
        this.errors = {};
        this.responseMessage = data.message;
        this.formData = this.emptyForm();
        this.submitted = true;
      })
      .catch(error => {
        console.log(error);
        this.errors = {
          general: "It seems you have lost your internet connection. Please try again later"
        };
        this.responseMessage = '';
      })
    }
  }
}