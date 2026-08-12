<footer>
    <div class="footer-inner">
        <div class="footer-brand">
            <img src="{{ asset('assets/images/logo.webp') }}" alt="PGTRB Botany Classes Tamil Nadu" />
            <p>Start your journey toward becoming a Government Botany Teacher with Arunai Academy.
                Learn from experts. Prepare with confidence. Achieve your rank. Build your future.</p>
            <div class="footer-social">
                <a target="_blank" rel="noopener"
                    href="https://api.whatsapp.com/send?phone=919500244679&text=Hello%20Arunai%20Academy"
                    class="social-btn" aria-label="Chat on WhatsApp">
                    <i class="fa-brands fa-whatsapp"></i>
                </a>
                <a target="_blank" href="https://www.instagram.com/arunai_academy_botany_coaching/"
                    class="social-btn"><i class="fa-brands fa-instagram"></i></a>
                <a target="_blank" href="https://youtube.com/@arunaiacademy9219?si=MOgEo22Kzj1_sR3S"
                    class="social-btn"><i class="fa-brands fa-youtube"></i></a>
                <a target="_blank" href="https://www.facebook.com/groups/1236018409928472/?ref=share&mibextid=NSMWBT"
                    class="social-btn"><i class="fa-brands fa-facebook-f"></i></a>
            </div>
        </div>
        <div class="footer-col">
            <h4>Quick Links</h4>
            <ul>
                <li><a href="{{ route('index') }}">Home</a></li>
                <li><a href="{{ route('about') }}">About Us</a></li>
                <li><a href="{{ route('ugtrb') }}">UGTRB</a></li>
                <li><a href="{{ route('pgtrb') }}">PGTRB</a></li>
                <li><a href="{{ route('achievers_page') }}">Achievers</a></li>
                <li><a href="{{ route('contact') }}">Contact Us</a></li>
            </ul>
        </div>

        <div class="footer-col">
            <h4>Contact Info</h4>
            <div class="footer-contact-item">
                <span class="icon"><i class="fa-solid fa-location-dot"></i></span>
                <span>3/2F
                    Emakuttiyur turn
                    Dharmapuri, Tamil Nadu - 636705,
                    India</span>
            </div>
            <div class="footer-contact-item">
                <span class="icon"><i class="fa-solid fa-phone"></i></span>
                <span>+91 9500244679<br />+91 7010753971</span>
            </div>
            <div class="footer-contact-item">
                <span class="icon"><i class="fa-regular fa-envelope"></i></span>
                <span>arunaiacademyforbotany100@gmail.com</span>
            </div>
        </div>

        <div class="footer-col">
            <h4>Location</h4>
            <div>
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3078.271400817034!2d78.14214947383613!3d12.100125688140869!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bac17b3e66e1bfb%3A0x68b372133d3c6f1b!2sArunai%20Academy%20%7C%20PG%20Trb%20Botany%20%7C%20Coaching%20Center%20in%20Dharmapuri!5e1!3m2!1sen!2sin!4v1775457001473!5m2!1sen!2sin"
                    width="100%" height="180" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </div>
    <div class="footer-bottom">
        <span>© 2025 Arunai Academy. All rights reserved.</span>
        <span>Designed by <a href="https://webbitech.com/" target="_blank">Webbitech</a></span>
    </div>
</footer>

<button id="back-top" aria-label="Back to top">↑</button>

<script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('assets/js/swiper-bundle.min.js') }}"></script>
<script src="{{ asset('assets/js/main.js') }}"></script>


<script>
    document.addEventListener("DOMContentLoaded", function () {
        const links = document.querySelectorAll(".nav-menu a");

        // Highlight based on current URL
        const currentPath = window.location.pathname.split("/").pop();

        links.forEach(link => {
            const linkPath = link.getAttribute("href").split("/").pop();

            if (linkPath === currentPath) {
                link.classList.add("active");

                // If inside dropdown, also highlight parent
                const dropdown = link.closest(".nav-dropdown");
                if (dropdown) {
                    dropdown.querySelector("a").classList.add("active");
                }
            }

            // Click event to switch active
            link.addEventListener("click", function () {
                links.forEach(l => l.classList.remove("active"));
                this.classList.add("active");
            });
        });
    });
</script>

<script type="application/ld+json">
{
  "@@context":"https://schema.org",
  "@type":"EducationalOrganization",
  "@id":"https://arunaiacademypgtrbbotany.in/#organization",
  "name":"Arunai Academy",
  "alternateName":"Arunai Academy for PGTRB & UGTRB Botany",
  "url":"https://arunaiacademypgtrbbotany.in/",
  "logo":"https://arunaiacademypgtrbbotany.in/assets/images/logo.webp",
  "image":"https://arunaiacademypgtrbbotany.in/assets/images/logo.webp",
  "description":"Tamil Nadu's No.1 PGTRB & UGTRB Botany Coaching Institute in Dharmapuri with 14+ years of excellence.",
  "telephone":"+919500244679",
  "email":"arunaiacademyforbotany100@gmail.com",
  "foundingDate":"2012",
  "address":{
    "@type":"PostalAddress",
    "streetAddress":"3/2F, Emakuttiyur Turn, Collectorate Post",
    "addressLocality":"Dharmapuri",
    "addressRegion":"Tamil Nadu",
    "postalCode":"636705",
    "addressCountry":"IN"
  }
}
</script>

<script type="application/ld+json">
{
  "@@context":"https://schema.org",
  "@type":"WebSite",
  "@id":"https://arunaiacademypgtrbbotany.in/#website",
  "url":"https://arunaiacademypgtrbbotany.in/",
  "name":"Arunai Academy",
  "description":"Tamil Nadu's No.1 PGTRB & UGTRB Botany Coaching Institute.",
  "publisher":{
    "@id":"https://arunaiacademypgtrbbotany.in/#organization"
  },
  "inLanguage":"en-IN"
}
</script>

<script type="application/ld+json">
{
  "@@context": "https://schema.org",
  "@type": "FAQPage",
  "mainEntity": [
    {
      "@type": "Question",
      "name": "What courses does Arunai Academy offer?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Arunai Academy offers specialized coaching for PGTRB Botany and UGTRB Botany aspirants with expert faculty, comprehensive study materials, regular tests, and exam-focused preparation."
      }
    },
    {
      "@type": "Question",
      "name": "Why choose Arunai Academy for PGTRB Botany Coaching in Dharmapuri?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Established in 2012, Arunai Academy has 14+ years of experience in Botany coaching. The academy provides experienced faculty, structured classes, updated study materials, and regular mock tests."
      }
    },
    {
      "@type": "Question",
      "name": "Can students from across Tamil Nadu join Arunai Academy?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Yes. Arunai Academy welcomes PGTRB and UGTRB Botany aspirants from Dharmapuri and all districts of Tamil Nadu with classroom coaching designed according to the latest TRB syllabus."
      }
    },
    {
      "@type": "Question",
      "name": "Does Arunai Academy provide study materials and mock tests?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Yes. Students receive comprehensive Botany study materials, previous year question paper discussions, topic-wise practice questions, and regular mock tests."
      }
    },
    {
      "@type": "Question",
      "name": "How can I enroll in Arunai Academy?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "You can enroll by contacting Arunai Academy through the official website or by phone. The admission team will guide you through course details, batch timings, and the enrollment process."
      }
    },
    {
      "@type": "Question",
      "name": "What is the eligibility for PGTRB Botany Coaching?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Candidates who meet the educational qualifications prescribed by the Tamil Nadu Teachers Recruitment Board (TRB) can join the PGTRB Botany coaching program."
      }
    },
    {
      "@type": "Question",
      "name": "Does Arunai Academy cover the latest PGTRB Botany syllabus?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Yes. The coaching program is regularly updated to match the latest Tamil Nadu TRB syllabus and exam pattern, ensuring students receive relevant and current preparation."
      }
    },
    {
      "@type": "Question",
      "name": "Are experienced faculty members available for Botany coaching?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Yes. Arunai Academy's Botany coaching is led by experienced faculty members who provide conceptual learning, exam strategies, and individual guidance throughout the course."
      }
    },
    {
      "@type": "Question",
      "name": "How long has Arunai Academy been providing Botany coaching?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Arunai Academy has been providing exclusive PGTRB and UGTRB Botany coaching since 2012, helping aspirants prepare with confidence through expert guidance and structured learning."
      }
    },
    {
      "@type": "Question",
      "name": "How can I contact Arunai Academy for admission?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "You can contact Arunai Academy through the official website, phone, or by visiting the academy in Dharmapuri, Tamil Nadu to learn more about admissions, fees, and upcoming batches."
      }
    }
  ]
}
</script>

<script type="application/ld+json">
{
  "@@context": "https://schema.org",
  "@type": "Service",
  "@id": "https://arunaiacademypgtrbbotany.in/#service",
  "name": "PGTRB & UGTRB Botany Coaching",
  "serviceType": "PGTRB & UGTRB Botany Coaching",
  "description": "Arunai Academy offers exclusive PGTRB and UGTRB Botany coaching with expert faculty, comprehensive study materials, regular mock tests, and exam-oriented preparation.",
  "provider": {
    "@type": "EducationalOrganization",
    "@id": "https://arunaiacademypgtrbbotany.in/#organization",
    "name": "Arunai Academy",
    "url": "https://arunaiacademypgtrbbotany.in/"
  },
  "areaServed": [
    {
      "@type": "City",
      "name": "Dharmapuri"
    },
    {
      "@type": "State",
      "name": "Tamil Nadu"
    }
  ],
  "availableChannel": {
    "@type": "ServiceChannel",
    "serviceUrl": "https://arunaiacademypgtrbbotany.in/",
    "servicePhone": {
      "@type": "ContactPoint",
      "telephone": "+91-9500244679"
    }
  },
  "offers": {
    "@type": "Offer",
    "availability": "https://schema.org/InStock",
    "url": "https://arunaiacademypgtrbbotany.in/"
  }
}
</script>
