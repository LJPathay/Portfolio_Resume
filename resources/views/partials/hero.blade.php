<section id="hero" class="min-h-screen flex items-center justify-center px-6 pt-20 relative">
    {{-- Gradient Orbs --}}
    <div class="absolute top-20 left-10 w-72 h-72 bg-blue-500/30 rounded-full blur-[128px] animate-pulse"></div>
    <div class="absolute bottom-20 right-10 w-96 h-96 bg-purple-500/20 rounded-full blur-[128px] animate-pulse" style="animation-delay: 1s;"></div>
    
    <div class="max-w-7xl mx-auto w-full">
        <div class="grid md:grid-cols-2 gap-12 items-center">
            {{-- Left Content --}}
            <div class="space-y-6">
                <div class="space-y-2">
                    <div class="flex items-center gap-2 text-blue-400 animate-fade-in-left delay-200 opacity-0">
                        <i data-lucide="terminal" class="w-5 h-5"></i>
                        <p>Hello, I'm</p>
                    </div>
                    
                    <h1 class="text-4xl md:text-6xl font-bold text-white bg-gradient-to-r from-white via-blue-100 to-purple-200 bg-clip-text text-transparent animate-fade-in-left delay-300 opacity-0">
                        Lebron James Pathay
                    </h1>
                    
                    <div class="animate-fade-in-left delay-400 opacity-0">
                        <h2 class="text-xl md:text-2xl text-slate-300 flex items-center gap-2">
                            <span class="inline-block w-2 h-2 bg-green-500 rounded-full animate-pulse"></span>
                            Web Developer & Back-End Developer
                        </h2>
                    </div>
                </div>
                
                <p class="text-slate-400 max-w-lg text-lg animate-fade-in-left delay-500 opacity-0">
                    Passionate developer seeking internship opportunities to leverage my expertise in back-end development and web technologies. I build robust, scalable solutions that power modern web applications.
                </p>
                
                <div class="flex gap-4 animate-fade-in-left delay-600 opacity-0">
                    <a href="https://github.com/LJPathay" target="_blank" rel="noopener noreferrer" class="p-3 bg-slate-800/80 hover:bg-blue-500/20 border border-slate-700 hover:border-blue-500 text-white rounded-xl transition-all hover:scale-110" aria-label="GitHub">
                        <i data-lucide="github" class="w-5 h-5"></i>
                    </a>
                    <a href="https://linkedin.com/in/lebron-james-pathay-bb42bb328" target="_blank" rel="noopener noreferrer" class="p-3 bg-slate-800/80 hover:bg-blue-500/20 border border-slate-700 hover:border-blue-500 text-white rounded-xl transition-all hover:scale-110" aria-label="LinkedIn">
                        <i data-lucide="linkedin" class="w-5 h-5"></i>
                    </a>
                    <a href="mailto:Jlebronjames420@gmail.com" class="p-3 bg-slate-800/80 hover:bg-blue-500/20 border border-slate-700 hover:border-blue-500 text-white rounded-xl transition-all hover:scale-110" aria-label="Email">
                        <i data-lucide="mail" class="w-5 h-5"></i>
                    </a>
                </div>
                
                <div class="flex gap-4 animate-fade-in-left delay-700 opacity-0">
                    <button onclick="scrollToSection('about')" class="px-6 py-3 bg-gradient-to-r from-blue-500 to-purple-500 hover:from-blue-600 hover:to-purple-600 text-white rounded-xl transition-all hover:scale-105 hover:shadow-lg hover:shadow-blue-500/50 flex items-center gap-2">
                        <i data-lucide="sparkles" class="w-5 h-5"></i>
                        Learn More
                    </button>
                    <a href="#contact" class="px-6 py-3 border-2 border-slate-600 hover:border-blue-500 bg-slate-800/50 hover:bg-slate-800 text-white rounded-xl transition-all hover:scale-105">
                        Get in Touch
                    </a>
                </div>
            </div>
            
            {{-- Right Content - Image --}}
            <div class="relative animate-fade-in-right delay-400 opacity-0">
                <div class="relative rounded-2xl overflow-hidden shadow-2xl border border-slate-700/50 hover:border-blue-500/50 transition-all group">
                    <img src="https://images.unsplash.com/photo-1581374820531-029275791beb?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w3Nzg4Nzd8MHwxfHNlYXJjaHwxfHxwcm9mZXNzaW9uYWwlMjBkZXZlbG9wZXIlMjB3b3Jrc3BhY2V8ZW58MXx8fHwxNzY2NjEyMDEwfDA&ixlib=rb-4.1.0&q=80&w=1080" alt="Developer workspace" class="w-full h-[500px] object-cover group-hover:scale-105 transition-transform duration-700">
                    <div class="absolute inset-0 bg-gradient-to-t from-slate-950 via-slate-900/20 to-transparent"></div>
                    
                    {{-- Floating badge --}}
                    <div class="absolute top-6 left-6 px-4 py-2 bg-slate-900/90 backdrop-blur-sm border border-blue-500/50 rounded-full flex items-center gap-2">
                        <span class="w-2 h-2 bg-green-500 rounded-full animate-pulse"></span>
                        <span class="text-white">Available for Internship</span>
                    </div>
                </div>
                
                {{-- Decorative elements --}}
                <div class="absolute -top-4 -right-4 w-24 h-24 bg-gradient-to-br from-blue-500 to-purple-500 rounded-2xl opacity-20 blur-xl"></div>
                <div class="absolute -bottom-4 -left-4 w-32 h-32 bg-gradient-to-br from-purple-500 to-pink-500 rounded-2xl opacity-20 blur-xl"></div>
            </div>
        </div>
        
        {{-- Scroll Indicator --}}
        <div class="absolute bottom-8 left-1/2 -translate-x-1/2 animate-bounce-slow">
            <i data-lucide="chevron-down" class="text-slate-400 w-8 h-8"></i>
        </div>
    </div>
</section>
