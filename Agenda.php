<?php

class Agenda
{

    private $arrayContactos = [];

    public function getArrayContactos() {
        return $this->arrayContactos;
    }
    public function setArrayContactos($arrayContactos) {
        $this->arrayContactos = $arrayContactos;
    }

    public function addContact(Contacto $cont)
    {
        //Si se introduce un contacto con id duplicado no sobreescribe el que hay
        if (key_exists($cont->getId(), $this->arrayContactos)) {
            return;
        }
        $this->arrayContactos[$cont->getId()] = $cont;
    }
    public function deleteContact($id)
    {
        //Elimina el contacto por el id que es la key en el array
        unset($this->arrayContactos[$id]);
    }
    public function __toString()
    {
        $cadena = "";
        foreach ($this->arrayContactos as $contacto) {
            $cadena .= "<tr>" .
                "<td>" . $contacto->getId() . "</td>" .
                "<td>" . $contacto->getNombre() . "</td>" .
                "<td>" . $contacto->getTelefono() . "</td>" .
                "</tr>";
        }
        return $cadena;
    }
}
