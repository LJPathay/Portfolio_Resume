<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio</title>
    
    {{-- Tailwind CSS CDN --}}
    <script src="https://cdn.tailwindcss.com"></script>
    
    {{-- Lucide Icons --}}
    <script src="https://unpkg.com/lucide@latest"></script>
    
    <style>
        /* Custom animations to replace Framer Motion */
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        
        @keyframes fadeInLeft {
            from {
                opacity: 0;
                transform: translateX(-50px);
            }
            to {
                opacity: 1;
                transform: translateX(0);
            }
        }
        
        @keyframes fadeInRight {
            from {
                opacity: 0;
                transform: translateX(50px);
            }
            to {
                opacity: 1;
                transform: translateX(0);
            }
        }
        
        @keyframes bounce {
            0%, 100% {
                transform: translateY(0);
            }
            50% {
                transform: translateY(10px);
            }
        }
        
        @keyframes navSlideDown {
            from {
                transform: translateY(-100px);
            }
            to {
                transform: translateY(0);
            }
        }
        
        .animate-fade-in-up {
            animation: fadeInUp 0.8s ease-out forwards;
        }
        
        .animate-fade-in-left {
            animation: fadeInLeft 0.8s ease-out forwards;
        }
        
        .animate-fade-in-right {
            animation: fadeInRight 0.8s ease-out forwards;
        }
        
        .animate-bounce-slow {
            animation: bounce 2s infinite;
        }
        
        .animate-nav-slide {
            animation: navSlideDown 0.5s ease-out forwards;
        }
        
        .delay-100 {
            animation-delay: 0.1s;
        }
        
        .delay-200 {
            animation-delay: 0.2s;
        }
        
        .delay-300 {
            animation-delay: 0.3s;
        }
        
        .delay-400 {
            animation-delay: 0.4s;
        }
        
        .delay-500 {
            animation-delay: 0.5s;
        }
        
        .delay-600 {
            animation-delay: 0.6s;
        }
        
        .delay-700 {
            animation-delay: 0.7s;
        }
        
        /* Particle canvas */
        #particles-canvas {
            position: fixed;
            inset: 0;
            width: 100%;
            height: 100%;
            pointer-events: none;
            opacity: 0.3;
        }
        
        /* Scroll reveal animations */
        .scroll-reveal {
            opacity: 0;
            transform: translateY(30px);
            transition: opacity 0.6s ease-out, transform 0.6s ease-out;
        }
        
        .scroll-reveal.revealed {
            opacity: 1;
            transform: translateY(0);
        }
    </style>
</head>
<body class="bg-slate-950 text-white">
    {{-- Animated Background --}}
    <canvas id="particles-canvas"></canvas>
    
    {{-- Main Container --}}
    <div class="min-h-screen relative overflow-hidden">
        <div class="relative z-10">
            @include('partials.navigation')
            @include('partials.hero')
            @include('partials.about')
            @include('partials.education')
            @include('partials.skills')
            @include('partials.certifications')
            @include('partials.projects')
            @include('partials.contact')
        </div>
    </div>
    
    {{-- JavaScript --}}
    <script>
        // Initialize Lucide Icons
        lucide.createIcons();
        
        // Particle Background Animation
        const canvas = document.getElementById('particles-canvas');
        const ctx = canvas.getContext('2d');
        
        canvas.width = window.innerWidth;
        canvas.height = window.innerHeight;
        
        const particles = [];
        
        // Create particles
        for (let i = 0; i < 100; i++) {
            particles.push({
                x: Math.random() * canvas.width,
                y: Math.random() * canvas.height,
                size: Math.random() * 2 + 1,
                speedX: (Math.random() - 0.5) * 0.5,
                speedY: (Math.random() - 0.5) * 0.5,
                opacity: Math.random() * 0.5 + 0.2
            });
        }
        
        function animateParticles() {
            ctx.clearRect(0, 0, canvas.width, canvas.height);
            
            particles.forEach((particle, index) => {
                particle.x += particle.speedX;
                particle.y += particle.speedY;
                
                if (particle.x < 0 || particle.x > canvas.width) particle.speedX *= -1;
                if (particle.y < 0 || particle.y > canvas.height) particle.speedY *= -1;
                
                ctx.beginPath();
                ctx.arc(particle.x, particle.y, particle.size, 0, Math.PI * 2);
                ctx.fillStyle = `rgba(59, 130, 246, ${particle.opacity})`;
                ctx.fill();
                
                // Draw lines between nearby particles
                particles.slice(index + 1).forEach(otherParticle => {
                    const dx = particle.x - otherParticle.x;
                    const dy = particle.y - otherParticle.y;
                    const distance = Math.sqrt(dx * dx + dy * dy);
                    
                    if (distance < 100) {
                        ctx.beginPath();
                        ctx.moveTo(particle.x, particle.y);
                        ctx.lineTo(otherParticle.x, otherParticle.y);
                        ctx.strokeStyle = `rgba(59, 130, 246, ${0.1 * (1 - distance / 100)})`;
                        ctx.lineWidth = 1;
                        ctx.stroke();
                    }
                });
            });
            
            requestAnimationFrame(animateParticles);
        }
        
        animateParticles();
        
        // Handle window resize
        window.addEventListener('resize', () => {
            canvas.width = window.innerWidth;
            canvas.height = window.innerHeight;
        });
        
        // Smooth scroll for navigation
        function scrollToSection(id) {
            const element = document.getElementById(id);
            if (element) {
                element.scrollIntoView({ behavior: 'smooth' });
            }
        }
        
        // Navigation scroll effect
        const nav = document.querySelector('nav');
        window.addEventListener('scroll', () => {
            if (window.scrollY > 50) {
                nav.classList.add('bg-slate-900/95', 'backdrop-blur-md', 'shadow-lg', 'border-b', 'border-slate-800');
                nav.classList.remove('bg-transparent');
            } else {
                nav.classList.remove('bg-slate-900/95', 'backdrop-blur-md', 'shadow-lg', 'border-b', 'border-slate-800');
                nav.classList.add('bg-transparent');
            }
        });
        
        // Mobile menu toggle
        const mobileMenuBtn = document.getElementById('mobile-menu-btn');
        const mobileMenu = document.getElementById('mobile-menu');
        
        mobileMenuBtn.addEventListener('click', () => {
            mobileMenu.classList.toggle('hidden');
        });
        
        // Scroll reveal animation
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        };
        
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('revealed');
                }
            });
        }, observerOptions);
        
        document.querySelectorAll('.scroll-reveal').forEach(el => {
            observer.observe(el);
        });
    </script>
</body>
</html>
