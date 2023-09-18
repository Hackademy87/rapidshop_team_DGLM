<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        .btn-login {
    text-align: center;
    background-color: var(--colorPrimary);
    border: 2px solid var(--colorPrimary);
    border-radius: 25px;
    padding: 0.5rem 0.8rem;
    transition: all ease-in-out 0.2s;
    font-size: 15px;
    display: flex;
    justify-content: center;
    align-items: center;
    color: var(--colorIce);
    font-weight: 600;
    width: 120px;
}
    </style>
</head>
<body>
    <h1>NUOVA RICHIESTA</h1>
    <h2>Dati dell'utente</h2>
    <ul>
        <li>Nome: {{$user->name}}</li>
        <li>email: {{$user->email}}</li>
        <li>cover letter: {{$coverLetter}}</li>
        <a href="{{ route('make.revisor', Auth::user()) }}" class="btn-login">Rendi revisore</a>
    </ul>
</body>
</html>