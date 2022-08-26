<div class="pcv-wrap">
    <div class="pcv-sideL">

        <img class="logo-site" src="{{ asset('logo/logo.png') }}">

        <span class="clear"></span>

        <div class="acerca-de-mi seccion">
            <h1>acerca de mi</h1>
            <div class="wrap-data">
                <span class="field">Edad</span>
                <span class="data">{{ $UserData->edad }}</span>
            </div>
            <div class="wrap-data">
                <span class="field">Teléfono</span>
                <span class="data">
                {{ $UserData->telefono }}<br>
                                                                                </span>
            </div>
            <div class="wrap-data">
                <span class="field">e-mail</span>
                <span class="data">{{ $UserData->email }} </span>
            </div>
            <div class="wrap-data">
                <span class="field">nacionalidad</span>
                <span class="data">{{ $UserData->nacionalidad }}</span>
            </div>
            <div class="wrap-data">
                <span class="field">zona de residencia</span>
                <span class="data">
                    {{ $UserData->zona_de_residencia }}
                    </span>

            </div>

            <div class="wrap-data">
                <span class="field">Vehículo: </span>
                <span class="data next">{{ $UserData->tiene_vehiculo }}</span>
            </div>
            <div class="wrap-data">
                <span class="field">Licencia: </span>
                <span class="data next">{{ $UserData->tiene_licencia_vehiculo }}</span>
            </div>
            <span class="clear"></span>
        </div>

        {{--<div class="eduSecundaria seccion">
            <h1 class="cleanH1">educación secundaria:</h1>
            <div class="wrap-data">
                <div class="eduSec nivel">
                    Completa
                </div>
            </div>
        </div>--}}
        <div class="otrosEstudios seccion">
            <h1>Educación</h1>
            @foreach($EducationsCandidate as $education)
                <div class="wrap-data">
                    <h2 class="title-school">"{{ $education->escolaridad }}"</h2>
                    <div class="wrap-data">
                        <div class="eduSec nivel">
                            - {{ $education->nombre_institucion }}
                        </div>
                    </div>
                    <div class="edu year">{{ $education->ano_finalizacion }}</div>
                    <div class="edu title">{{ $education->titulo }}</div>
                    <div class="edu detail">
                        {{ $education->pais->pais }}
                    </div>
                </div>
                <hr>
            @endforeach

        </div>
    </div>
    <div class="pcv-sideR">

        <div class="headerCV seccion">

            <div class="wrap-data couple headerdata1">
                <div class="header pic">

                    <img class="logo-site" src="https://www.tecoloco.com.gt/CareerManager/ProfileImage.aspx">
                </div>
            </div>
            <div class="wrap-data couple headerdata2">

                <div class="header name">
                    {{ $UserData->name }}
                </div>
                <div class="header lastExperienceTitle">

                    {{ $UserData->candidate_information->cargo_desempenado->cargo_desempenado }}
                </div>

            </div>

        </div>
        <div class="">
            <h1>experiencias laborales</h1>
            @foreach($JobExperiencesCandidate as $jobExperience)
                <div class="wrap-data">
                    <div class="exp title">
                        {{ $jobExperience->nombre_cargo }}
                        <span> {{ $jobExperience->cargo_desempenado->cargo_desempenado }} </span>
                    </div>
                    <div class="exp company">
                        {{ $jobExperience->compania }}

                        <span class="company-area"><span><b>Área de la empresa:</b></span>
                            {{ $jobExperience->actividad->nombre_actividad }}
                        </span>
                    </div>
                    <div class="exp date">
                        {{ $jobExperience->fecha_inicio_trabajo }} - {{ $jobExperience->fecha_final_trabajo }}
                        |
                        <span class="exp salary">
                                    <span>Rango Salarial:</span> {{ $jobExperience->salario->salario }}
                                </span>

                    </div>
                    <div class="exp description">
                        {{ $jobExperience->descripcion }}
                        <span class="beneficios"><span>Beneficios:</span> {{ $jobExperience->beneficios }} </span>
                    </div>
                </div>
            @endforeach

        </div>

        <div class="seccion idiomas">
            <h1>Idiomas</h1>
            @foreach($LanguagesCandidate as $language)
                <div class="wrap-data couple pill">
                    {{ $language->base_idioma->nombre_idioma }} - {{ $language->nivel }}
                </div>
            @endforeach

        </div>

        {{--<div class="seccion habilidades">
            <h1>habilidades técnicas</h1>
            <div class="wrap-data couple pill">
                .Net - Intermedio
            </div>
            <div class="wrap-data couple pill">
                C ++ - Intermedio
            </div>

        </div>--}}
        <br>
        <br>

    </div>

</div>
