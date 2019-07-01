<?php

class Cltvo_Page_Contact extends Cltvo_Page
{
    public $social_net;

    function __construct(){
        parent::__construct(specialPage('contact',true));
    }

    public function setMetas()
    {
        $this->social_net = $this->getSocialNets();
    }


    protected function getSocialNets()
    {
        $social_nets = Cltvo_SocialNet::getMetaValue($this->post);

        $redes = [];

        foreach (Cltvo_SocialNet::$redesConUrl as $net => $label) {
            if (filter_var($social_nets[$net]["url"], FILTER_VALIDATE_URL)) {
                $redes[] = (object) [
                    "label" => empty($social_nets[$net]["label"]) ? $label : $social_nets[$net]["label"],
                    "url"   => $social_nets[$net]["url"],
                ];
            }
        }

        $social_nets["address"] = nl2br($social_nets["address"]) ;

        $social_nets["telefono"] = nl2br($social_nets["telefono"]);

        $social_nets["mail"] = filter_var($social_nets["mail"], FILTER_VALIDATE_EMAIL) ? $social_nets["mail"] : "info@lheritage.casa";

        $social_nets["hours"] = nl2br($social_nets["hours"]);

        $social_nets["nets"] = $redes;
        return (object) $social_nets;
    }

}
