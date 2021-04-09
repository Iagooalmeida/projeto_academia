function ValidaCampo() {
    if(document.form.txNome.value == ""){
        alert('O campo nome é obrigatório');
        document.form.txNome.focus();
        return false;
    }else

    if(document.form.txfone.value == ""){
        alert('O campo telefone é obrigatório');
        document.form.txfone.focus();
        return false;
    }else

    if(document.form.txCel.value == ""){
        alert('O campo celular é obrigatório');
        document.form.txCel.focus();
        return false;
    }else

    if(document.form.txEmail.value == "" ||
    document.form.txEmail.value.indexOf('@')==-1 ||
    document.form.txEmail.value.indexOf('.')==-1)
    {
        alert('O campo email é obrigatório');
        document.form.tx_email.focus();
        return false;
    }else

    if (document.form.tx_mensagem.value=="")
    {
        alert( "Preencha o campo MENSAGEM!" );
        document.form.tx_mensagem.focus();
        return false;
    }else
    {
        return true;
    }
}
