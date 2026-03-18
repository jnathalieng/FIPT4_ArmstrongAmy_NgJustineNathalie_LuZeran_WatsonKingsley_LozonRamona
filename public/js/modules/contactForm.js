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
  console.log('Response object:', response); // Log the response
  
  // Check if response is actually JSON
  if (!response.ok) {
    throw new Error(`HTTP error! status: ${response.status}`);
  }
  
  return response.text(); // Get as text first
})
.then(text => {
  console.log('Raw response text:', text); // See what we actually got
  
  try {
    const data = JSON.parse(text); // Try to parse as JSON
    console.log('Parsed data:', data);
    
    if(data.status === 'success') {
      this.feedbackMessage = data.message;
      this.feedbackClass = 'success';
      this.formData = { name: '', email: '', message: '' };
    } else {
      this.feedbackMessage = data.message;
      this.feedbackClass = 'error';
    }
  } catch(parseError) {
    console.error('Failed to parse JSON:', parseError);
    this.feedbackMessage = 'Error parsing server response';
    this.feedbackClass = 'error';
  }
})
    }
  }
};
