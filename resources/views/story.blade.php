@extends('components.layout')

@section('title', 'História')

@section('content')
    <h1>História</h1>
    <p>Descubra a história por trás do jogo Undertale.</p>
    @component('components.message', ['title' => ''])
    <div style="text-align: center;">
        <h1>Undertale</h1>
    </div>
    <p>Undertale é um jogo de RPG onde o jogador controla uma criança que cai no subsolo, um mundo habitado por monstros. A história se desenrola à medida que a criança tenta encontrar uma maneira de voltar para a superfície. Aqui está um resumo detalhado da história dentro do jogo:</p>

    <h2>Prólogo</h2>
    <p>Há muito tempo, uma guerra entre humanos e monstros resultou na vitória dos humanos, que selaram os monstros no subsolo com uma barreira mágica. Muitos anos depois, uma criança cai em um buraco em uma montanha e entra no mundo dos monstros.</p>

    <h2>Ruínas</h2>
    <p>A criança acorda nas Ruínas e é encontrada por Flowey, uma flor falante que tenta matar a criança, mas é impedida por Toriel, uma gentil cabra monstro. Toriel cuida da criança e ensina as mecânicas do jogo. Ela tenta proteger a criança do mundo exterior, mas eventualmente a criança deve deixar as Ruínas para continuar sua jornada.</p>

    <h2>Snowdin</h2>
    <p>A criança chega a Snowdin, onde encontra os irmãos esqueletos, Sans e Papyrus. Sans é relaxado e engraçado, enquanto Papyrus é ambicioso e quer capturar a criança para ganhar respeito. A criança eventualmente derrota ou faz amizade com Papyrus e continua sua jornada.</p>

    <h2>Waterfall</h2>
    <p>Em Waterfall, a criança é perseguida por Undyne, a chefe da guarda real. Dependendo das ações do jogador, a criança pode lutar contra Undyne ou fazer amizade com ela. A criança também conhece Monster Kid, um jovem monstro que idolatra Undyne.</p>

    <h2>Hotland e Laboratório</h2>
    <p>A criança chega a Hotland e encontra Alphys, a cientista real, que tem uma queda por Undyne. Alphys ajuda a criança a enfrentar vários desafios e apresenta Mettaton, um robô estrela de televisão criado por Alphys. A criança enfrenta várias formas de Mettaton antes de seguir em direção ao Castelo Real.</p>

    <h2>Castelo Real e Asgore</h2>
    <p>No Castelo Real, a criança finalmente encontra Asgore, o rei dos monstros, que precisa da alma da criança para quebrar a barreira mágica e liberar os monstros. Antes do confronto final, a criança descobre a verdade sobre a história de Asriel Dreemurr, o filho de Asgore e Toriel, e como ele morreu tentando salvar uma criança humana.</p>

    <h2>Confronto Final</h2>
    <p>O final do jogo varia dependendo das ações do jogador:</p>

    <ul>
        <li><strong>Rota Pacifista:</strong> Se o jogador não matou nenhum monstro, a criança faz amizade com todos e descobre que a alma da criança humana e a alma de um monstro podem quebrar a barreira. Asriel, revivido temporariamente, finalmente se despede e a barreira é quebrada. Os monstros e a criança retornam à superfície.</li>
        <li><strong>Rota Neutra:</strong> Se o jogador matou alguns monstros, mas não todos, o jogo termina de várias maneiras, dependendo de quem foi morto. Sans julga as ações da criança, e o futuro do subsolo varia conforme as escolhas feitas.</li>
        <li><strong>Rota Genocida:</strong> Se o jogador mata todos os monstros, a criança se torna uma entidade malévola. Sans tenta parar a criança, mas é derrotado. A criança enfrenta Asgore e Flowey, e depois destrói o subsolo. O jogo termina com a criança tomando a forma de um vilão.</li>
    </ul>

    <h2>Temas e Mensagens</h2>
    <p>Undertale aborda temas de empatia, redenção e a natureza das escolhas. A interação do jogador com os monstros e as consequências dessas interações fazem do jogo uma experiência única, onde a moralidade e as decisões têm um impacto profundo na história e nos personagens.</p>

    <h2>Epílogo</h2>
    <p>Dependendo das escolhas feitas, o jogo pode ter diferentes epílogos, mostrando o futuro dos personagens e do mundo subterrâneo. As ações do jogador influenciam diretamente esses finais, proporcionando uma experiência personalizada e emocionalmente envolvente.</p>
    <div style="text-align: center;">
        <h1>FIM</h1>
    </div>
    @endcomponent
@endsection
