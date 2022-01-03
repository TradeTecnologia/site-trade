<footer class="footer">
    <div class="container">
        <div class="center flex-column flex-center">
            <div class="social">
                <ul class="flex-row">
                    @if(!empty($info_geral['redes_sociais']['instagram']))
                    <li>
                        <a href="{{ $info_geral['redes_sociais']['instagram'] }}" target="_blank" rel="noopener">
                            <i class="fab fa-instagram"></i>
                        </a>
                    </li>
                    @endif
                    @if(!empty($info_geral['redes_sociais']['facebook']))
                    <li>
                        <a href="{{ $info_geral['redes_sociais']['facebook'] }}" target="_blank" rel="noopener">
                            <i class="fab fa-facebook"></i>
                        </a>
                    </li>
                    @endif
                    @if(!empty($info_geral['whatsapp']))
                    <li>
                        <a href="{{ $info_geral['whatsapp'] }}" target="_blank" rel="noopener">
                            <i class="fab fa-whatsapp"></i>
                        </a>
                    </li>
                    @endif
                    @if(!empty($info_geral['redes_sociais']['twitter']))
                    <li>
                        <a href="{{ $info_geral['redes_sociais']['twitter'] }}" target="_blank" rel="noopener">
                            <i class="fab fa-linkedin"></i>
                        </a>
                    </li>
                    @endif
                </ul>
            </div>
            <div class="sitemap">
                <ul class="flex-row flex-center">
                    <li>
                        <a href="/" class="display-5 uppercase fwhite" alt="Início">Início</a>
                    </li>
                    <li>
                        <a href="/servicos" class="display-5 uppercase fwhite" alt="Serviços">Serviços</a>
                    </li>
                    <li>
                        <a href="/sobre" class="display-5 uppercase fwhite" alt="Sobre">Sobre</a>
                    </li>
                    <li>
                        <a href="/simulacao/financiamento" class="display-5 uppercase fwhite" alt="Simulação">Simulação</a>
                    </li>
                    <li>
                        <a href="/central-franqueado" class="display-5 uppercase fwhite" alt="Central do franqueado">Central do franqueado</a>
                    </li>
                    <li>
                        <a href="/seja-franqueado" class="display-5 uppercase fwhite" alt="Seja um franqueado">Seja um franqueado</a>
                    </li>
                </ul>
            </div>
            <div class="copyright">
                <span class="fwhite">&copy; Trade Off Assessoria Financeira e Imobiliária <?= date('Y'); ?></span>
            </div>
        </div>
    </div>
</footer>