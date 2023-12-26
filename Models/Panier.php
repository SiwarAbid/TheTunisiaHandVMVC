<?php
class Panier {
    private $articles;

    public function __construct() {
        $this->articles = array();
    }

    public function ajouterArticle($idProd, $prix, $quantite) {
        // vérifier si l'article est déjà dans le panier
        foreach($this->articles as $article) {
            if($article['$idProd'] == $idProd) {
                // l'article existe déjà, mettre à jour la quantité
                $article['quantite'] += $quantite;
                return;
            }
        }

        // l'article n'est pas encore dans le panier, l'ajouter
        $nouvelArticle = array(
            'idProd' => $idProd,
            'prix' => $prix,
            'quantite' => $quantite
        );
        // 'array_push()' permet d'ajouter un ou plusieurs éléments à la fin d'un tableau
        array_push($this->articles, $nouvelArticle);
    }

    public function supprimerArticle($idProd) {
        // parcourir le panier et supprimer l'article avec le nom donné
        foreach($this->articles as $index => $article) {
            if($article['idProd'] == $idProd) {
                // 'unset()' permet de supprimer une variable ou un élément d'un tableau
                unset($this->articles[$index]);
                return;
            }
        }
    }

    public function viderPanier() {
        $this->articles = array();
    }

    public function getArticles() {
        return $this->articles;
    }

    public function montantTotal() {
        $total = 0;
        foreach($this->articles as $article) {
            $total += $article['prix'] * $article['quantite'];
        }
        return $total;
    }
}
?>