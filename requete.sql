
--      *****LISTES DES ARTICLES (TRIE PAR DATE DE PARUTION)******       --
--Articles
SELECT  * FROM `Articles` ORDER BY `published_date` DESC;



--     ******AFFICHAGE D'UN ARTICLE******  --

-- Récupère les catégories de l'article.
SELECT `categories_id` FROM `Articles`;
-- Récupère les tags de l'article.
SELECT `tags_id`, `articles_id` FROM `blog`.`articles_has_tags`;
--Récupères les users_id de l'article.
SELECT `users_id` FROM `Articles`;
--Récupère le contenu des commentaires.
SELECT `content` FROM `Comments`;

--     *******AFFICHAGE D'UN AUTEUR****** --
SELECT `users_id` FROM `Articles`;

-- ********LISTE DES ARTICLES PAR TAGS****** --
SELECT `tags_id`, `articles_id` FROM `blog`.`articles_has_tags`;
  
