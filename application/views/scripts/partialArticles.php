<?php
$this->bindClick($this->idArticle);
?>

<div class="blockArticles">
    <div class="blockTitres">
        <a href="<?php echo $this->url(array('idArticle'=>$this->idArticle, 'titleArticle'=>$this->slug($this->escape($this->titreArticle))),'details'); ?>">
            
           <?php echo $this->escape($this->titreArticle);?>

        </a>
        
    </div>
    <div class="blockContenu"><?php echo $this->escape($this->contenuArticle);?></div>
    <div class="blockInfoArticles">
        <div class="blockCommentairesArticles" id="commentaire<?php echo $this->idArticle; ?>">
            <a href="#"><span id="span<?php echo $this->idArticle; ?>"><?php echo count($this->commentaire);?></span> commentaire</a>
        </div>
        <div class="blockUserArticles"><?php echo $this->escape($this->nomUser);?></div>
        <div class="blockDateArticles"><?php echo $this->escape($this->dateArticle);?></div>
    </div>

    <div class="clear"></div>

    <div id="comment<?php echo $this->idArticle; ?>" class="commentaire">

         <?php foreach ($this->commentaire as $v): ?>
         
         <?php echo $v["commentaire"];?><br />

         <?php endforeach; ?>


        <?php echo "Taper commentaire"; ?><br />
        <textarea id="commentaireText<?php echo $this->idArticle; ?>" name="comm"></textarea><br />
        <input type="button" id="envoyerCommentBtn<?php echo $this->idArticle; ?>" value="Envoyer" />
    </div>
</div>