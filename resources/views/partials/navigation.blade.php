<nav class="fixed top-0 w-full z-50 transition-all duration-300 bg-transparent animate-nav-slide">
    <div class="max-w-7xl mx-auto px-6 py-4">
        <div class="flex justify-between items-center">
            {{-- Logo --}}
            <button 
                onclick="scrollToSection('hero')" 
                class="text-2xl font-bold text-transparent bg-gradient-to-r from-blue-500 to-purple-500 bg-clip-text hover:from-blue-400 hover:to-purple-400 transition-all hover:scale-105"
            >
                LP
            </button>
            
            {{-- Desktop Menu --}}
            <div class="hidden md:flex gap-8">
                <button 
                    onclick="scrollToSection('about')" 
                    class="text-white hover:text-blue-400 transition-colors capitalize relative group"
                >
                    About
                    <span class="absolute -bottom-1 left-0 w-0 h-0.5 bg-gradient-to-r from-blue-500 to-purple-500 group-hover:w-full transition-all duration-300"></span>
                </button>
                <button 
                    onclick="scrollToSection('education')" 
                    class="text-white hover:text-blue-400 transition-colors capitalize relative group"
                >
                    Education
                    <span class="absolute -bottom-1 left-0 w-0 h-0.5 bg-gradient-to-r from-blue-500 to-purple-500 group-hover:w-full transition-all duration-300"></span>
                </button>
                <button 
                    onclick="scrollToSection('skills')" 
                    class="text-white hover:text-blue-400 transition-colors capitalize relative group"
                >
                    Skills
                    <span class="absolute -bottom-1 left-0 w-0 h-0.5 bg-gradient-to-r from-blue-500 to-purple-500 group-hover:w-full transition-all duration-300"></span>
                </button>
                <button 
                    onclick="scrollToSection('certifications')" 
                    class="text-white hover:text-blue-400 transition-colors capitalize relative group"
                >
                    Certifications
                    <span class="absolute -bottom-1 left-0 w-0 h-0.5 bg-gradient-to-r from-blue-500 to-purple-500 group-hover:w-full transition-all duration-300"></span>
                </button>
                <button 
                    onclick="scrollToSection('projects')" 
                    class="text-white hover:text-blue-400 transition-colors capitalize relative group"
                >
                    Projects
                    <span class="absolute -bottom-1 left-0 w-0 h-0.5 bg-gradient-to-r from-blue-500 to-purple-500 group-hover:w-full transition-all duration-300"></span>
                </button>
                <button 
                    onclick="scrollToSection('contact')" 
                    class="text-white hover:text-blue-400 transition-colors capitalize relative group"
                >
                    Contact
                    <span class="absolute -bottom-1 left-0 w-0 h-0.5 bg-gradient-to-r from-blue-500 to-purple-500 group-hover:w-full transition-all duration-300"></span>
                </button>
            </div>
            
            {{-- Mobile Menu Button --}}
            <button 
                id="mobile-menu-btn"
                class="md:hidden text-white p-2 hover:bg-slate-800 rounded-lg transition-colors"
            >
                <i data-lucide="menu" class="w-6 h-6"></i>
            </button>
        </div>
        
        {{-- Mobile Menu --}}
        <div id="mobile-menu" class="hidden md:hidden mt-4 pb-4 flex flex-col gap-4">
            <button 
                onclick="scrollToSection('about')" 
                class="text-white hover:text-blue-400 transition-colors text-left px-4 py-2 hover:bg-slate-800/50 rounded-lg capitalize"
            >
                About
            </button>
            <button 
                onclick="scrollToSection('education')" 
                class="text-white hover:text-blue-400 transition-colors text-left px-4 py-2 hover:bg-slate-800/50 rounded-lg capitalize"
            >
                Education
            </button>
            <button 
                onclick="scrollToSection('skills')" 
                class="text-white hover:text-blue-400 transition-colors text-left px-4 py-2 hover:bg-slate-800/50 rounded-lg capitalize"
            >
                Skills
            </button>
            <button 
                onclick="scrollToSection('certifications')" 
                class="text-white hover:text-blue-400 transition-colors text-left px-4 py-2 hover:bg-slate-800/50 rounded-lg capitalize"
            >
                Certifications
            </button>
            <button 
                onclick="scrollToSection('projects')" 
                class="text-white hover:text-blue-400 transition-colors text-left px-4 py-2 hover:bg-slate-800/50 rounded-lg capitalize"
            >
                Projects
            </button>
            <button 
                onclick="scrollToSection('contact')" 
                class="text-white hover:text-blue-400 transition-colors text-left px-4 py-2 hover:bg-slate-800/50 rounded-lg capitalize"
            >
                Contact
            </button>
        </div>
    </div>
</nav>
