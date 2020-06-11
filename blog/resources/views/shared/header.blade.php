
<header class="main-header">
        <div class="header-img">
            <img src="https://www.boolean.careers/images/common/logo.png" alt="Logo" srcset="">
        </div>
           
           
        <div class="header-link">
                <nav>
                    <ul>
                    <li>
                        <a @if (Request::route()->getName() == 'static-page.home') class ="active" @endif href="{{route('static-page.home')}}">Home</a>
                    </li>
                    <li>
                        <a @if (Request::route()->getName() == 'static-page.faq') class ="active" @endif href="{{route('static-page.faq')}}">Domande Frequenti</a>
                    </li>
                    <li>
                        <a @if (Request::route()->getName() == 'static-page.privacy') class ="active" @endif href="{{route('static-page.privacy')}}">Privacy</a>
                    </li>

                    <li>
                        <a @if (Request::route()->getName() == 'student.index') class ="active" @endif href="{{route('student.index')}}">I nostri ex studenti</a>
                    </li>
                        <!-- <li> <a href="">Lezione gratuita</a></li>
                        <li> <a href="">Candidatura</a></li> -->
                    </ul>
                </nav>
            </div>
        </header>