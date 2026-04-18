export default {
    data() {
        return {
            blogs: [],
            currentBlog: null,
            isPostPage: false,
            isMobile: window.innerWidth < 768
        }
    },
mounted() {
    const el = document.getElementById('blog-app');
    if (el && el.dataset.blog) {
        this.currentBlog = JSON.parse(el.dataset.blog);
        this.isPostPage = true;
    } else {
        fetch('http://127.0.0.1:8000/api/blogs')
        .then(res => {
            if(!res.ok) throw new Error("failed to Fetch the Blogs");
            return res.json();
        })
        .then(data => {
            this.blogs = data;
            this.loading = false;
        })
        .catch(err => console.error('Error Loading blogs', err));
    }

    window.addEventListener('resize', () => {
        this.isMobile = window.innerWidth < 768; // ← fixed capital W
    });
},

    methods: {
        goToBlog(blogId) {
            window.location.href = `/api/blog-post/${blogId}`;
        },
        goBackToBlog() {
            window.location.href = '/blogs';
        }
    },
  template: `
        <!-- Blog Listing Page -->
        <div v-if="!isPostPage" class="blog-container">
            <section class="hero-section">
                <div class="hero-title-con">
                    <div class="hero-title">
                        <p>Blog</p>
                    </div>
                    <div class="hero-subtitle">
                        <p>Stories and insights from London Aviation Museum
                        </p>
                    </div>
                </div>
            </section>

            <section class="blog-listing">
                <div class="blog-grid">
                    <article 
                        v-for="blog in blogs" 
                        :key="blog.id"
                        class="blog-card"
                        @click="goToBlog(blog.id)"
                    >
                        <img 
                            v-if="blog.featured_image"
                            :src="'/storage/blog-images/' + blog.featured_image" 
                            :alt="blog.featured_image_alt"
                        >
                        <h2 class="r-title-text">{{ blog.title }}</h2>
                        <p class="excerpt">{{ blog.excerpt }}</p>
                        <span class="date">{{ new Date(blog.created_at).toLocaleDateString('en-US', { year: 'numeric', month: 'short', day: 'numeric' }) }}</span>
                    </article>
                </div>
            </section>
        </div>

        <!-- Blog Post Page -->
        <div v-if="isPostPage && currentBlog" class="blog-post-container">
            <article class="blog-post">
                <img 
                    v-if="currentBlog.featured_image"
                    :src="'/storage/blog-images/' + currentBlog.featured_image" 
                    :alt="currentBlog.featured_image_alt"
                    class="featured-image"
                >
                
                <div class="blog-post-content">
                    <h1>{{ currentBlog.title }}</h1>
                    <p class="date">Published {{ new Date(currentBlog.created_at).toLocaleDateString('en-US', { year: 'numeric', month: 'short', day: 'numeric' }) }}</p>
                    
                    <div class="content">
                        {{ currentBlog.content }}
                    </div>
                </div>
                
                <button @click="goBackToBlog()" class="back-link">← Back to Blog</button>
            </article>
        </div>
    `
}