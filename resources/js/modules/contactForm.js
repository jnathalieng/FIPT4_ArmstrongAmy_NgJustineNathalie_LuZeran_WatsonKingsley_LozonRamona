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
