# Installing Symfony (optional)
`docker exec -it php74-container bash`
`composer create-project symfony/skeleton`

#### Check PHP extension required for Symfony project
`symfony check:req`

#### Require Doctrine
`composer require doctrine`

#### Require Maker for creation of entities
`composer require doctrine maker`

#### Require Crud
`composer require form validator twig-bundle security-csrf annotations`

#### Create Database with Doctrine
`docker-compose run --rm php74-service php bin/console doctrine:database:create`

`docker exec -it mysql-service bash`

#### Require webpack encore
`docker exec -it php74-container bash`
`composer require encore`
or
`yarn add @symfony/webpack-encore --dev`

#### Add package json files
`docker-compose run --rm node-service yarn install`

#### Compile our assets
`docker-compose run --rm node-service yarn dev`
Maybe
`yarn add @symfony/webpack-encore @symfony/stimulus-bridge@^2.0.0 stimulus add webpack-notifier@^1.6.0 --dev`

#### Create Migrations
`php bin/console make:migration`

#### Run migrations
`php bin/console doctrine:migrations:migrate`

#### Create Entites
`bin/console make:entity`
```
Class name of the entity to create or update (e.g. GentleKangaroo):
 > post

 created: src/Entity/Post.php
 created: src/Repository/PostRepository.php
 
 Entity generated! Now let's add some fields!
 You can always add more fields later manually or by re-running this command.

 New property name (press <return> to stop adding fields):
 > title

 Field type (enter ? to see all types) [string]:
 > 

 Field length [255]:
 > 

 Can this field be null in the database (nullable) (yes/no) [no]:
 > 
```

#### Create Relations
`bin/console make:entity`
```
 Class name of the entity to create or update (e.g. FierceChef):
 > comment

 Your entity already exists! So let's add some new fields!

 New property name (press <return> to stop adding fields):
 > post

 Field type (enter ? to see all types) [string]:
 > relation

 What class should this entity be related to?:
 > Post

What type of relationship is this?
 ------------ ------------------------------------------------------------------- 
  Type         Description                                                        
 ------------ ------------------------------------------------------------------- 
  ManyToOne    Each Comment relates to (has) one Post.                            
               Each Post can relate to (can have) many Comment objects            
                                                                                  
  OneToMany    Each Comment can relate to (can have) many Post objects.           
               Each Post relates to (has) one Comment                             
                                                                                  
  ManyToMany   Each Comment can relate to (can have) many Post objects.           
               Each Post can also relate to (can also have) many Comment objects  
                                                                                  
  OneToOne     Each Comment relates to (has) exactly one Post.                    
               Each Post also relates to (has) exactly one Comment.               
 ------------ ------------------------------------------------------------------- 

 Relation type? [ManyToOne, OneToMany, ManyToMany, OneToOne]:
 > ManyToOne

 Is the Comment.post property allowed to be null (nullable)? (yes/no) [yes]:
 > no

 Do you want to add a new property to Post so that you can access/update Comment objects from it - e.g. $post->getComments()? (yes/no) [yes]:
 > 

 A new property will also be added to the Post class so that you can access the related Comment objects from it.

 New field name inside Post [comments]:
 > 

 Do you want to activate orphanRemoval on your relationship?
 A Comment is "orphaned" when it is removed from its related Post.
 e.g. $post->removeComment($comment)
 
 NOTE: If a Comment may *change* from one Post to another, answer "no".

 Do you want to automatically delete orphaned App\Entity\Comment objects (orphanRemoval)? (yes/no) [no]:
 > yes

 updated: src/Entity/Comment.php
 updated: src/Entity/Post.php
 ```

#### Make Crud Controller
`bin/console make:crud`
`Post`
