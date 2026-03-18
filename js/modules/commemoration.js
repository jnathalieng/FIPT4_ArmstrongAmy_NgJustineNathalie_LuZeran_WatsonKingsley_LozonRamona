export default {
  data() {
    return {
      comm420Data: [],
      loading: true,
      error: null
    };
  },
  mounted() {
    console.log('Commemoration component mounted');
    this.fetchCommData();
  },
  methods: {
    async fetchCommData() {
      try {
        console.log('Fetching data from /api/comm');
        const response = await fetch('/api/comm');
        
        console.log('Response status:', response.status);
        
        if (!response.ok) {
          throw new Error('Failed to fetch data');
        }

        const data = await response.json();
        
        console.log('Received data:', data);
        
        this.comm420Data = data.data;
        this.loading = false;
        console.log('comm420Data updated:', this.comm420Data);

      } catch (error) {
        this.error = 'Error loading commemoration data';
        console.error('Fetch error:', error);
        this.loading = false;
      }
    }
  }
};