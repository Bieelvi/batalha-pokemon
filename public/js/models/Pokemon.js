class Pokemon 
{
    constructor(nome, vida, ataque, cura, img) 
    {
        this._nome = nome;
        this._vida = vida;
        this._vidaInicial = vida;
        this._ataque = ataque;
        this._cura = cura;
        this._img = img;
    }

    get nome() 
    {
        return this._nome;
    }

    get vida() 
    {
        return this._vida;
    }

    get ataque() 
    {
        return this._ataque;
    }

    get cura()
     {
        return this._cura;
    }

    get img() 
    {
        return this._img;
    }

    get vidaInicial()
    {
        return this._vidaInicial;
    }

    get ataque() 
    {
        return Math.floor(Math.random() * this._ataque) + 1;
    }

    get curar() 
    {
        let cura = Math.floor(Math.random() * this._cura) + 1;

        let vidaParcial = cura + this._vida;

        if (this._vida == this._vidaInicial) {
            return 0;
        }

        if (vidaParcial == this._vidaInicial) {
            return cura;
        }

        if (vidaParcial > this._vidaInicial) {
            this._vida = this._vidaInicial;

            return cura - (vidaParcial - this._vidaInicial);
        }

        if (vidaParcial <= this._vidaInicial) {
            this._vida = this._vida + cura;
            return cura;
        }
    }

    dano(dano) 
    {
        if ((this._vida - dano) <= 0) {
            this._vida = 0;
        } else {
            this._vida = this._vida - dano;
        }
    }
}