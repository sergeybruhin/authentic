<?php

// @formatter:off
/**
 * A helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace App\Models{
/**
 * App\Models\Collection
 *
 * @property int $id
 * @property string $name
 * @property string $slug
 * @property string|null $image
 * @property string|null $collectionable_type
 * @property int|null $collectionable_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Model|\Eloquent $collectionable
 * @method static \Database\Factories\CollectionFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|Collection newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Collection newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Collection query()
 * @method static \Illuminate\Database\Eloquent\Builder|Collection whereCollectionableId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Collection whereCollectionableType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Collection whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Collection whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Collection whereImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Collection whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Collection whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Collection whereUpdatedAt($value)
 */
	class Collection extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Phrase
 *
 * @property int $id
 * @property string $text
 * @property string $image
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Tag[] $tags
 * @property-read int|null $tags_count
 * @method static \Database\Factories\PhraseFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|Phrase newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Phrase newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Phrase query()
 * @method static \Illuminate\Database\Eloquent\Builder|Phrase whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Phrase whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Phrase whereImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Phrase whereText($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Phrase whereUpdatedAt($value)
 */
	class Phrase extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\PhraseCategory
 *
 * @property int $id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|PhraseCategory newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PhraseCategory newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PhraseCategory query()
 * @method static \Illuminate\Database\Eloquent\Builder|PhraseCategory whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PhraseCategory whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PhraseCategory whereUpdatedAt($value)
 */
	class PhraseCategory extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Tag
 *
 * @property int $id
 * @property string $name
 * @property string $slug
 * @property string|null $taggable_type
 * @property int|null $taggable_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Model|\Eloquent $taggable
 * @method static \Database\Factories\TagFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|Tag newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Tag newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Tag query()
 * @method static \Illuminate\Database\Eloquent\Builder|Tag whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Tag whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Tag whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Tag whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Tag whereTaggableId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Tag whereTaggableType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Tag whereUpdatedAt($value)
 */
	class Tag extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\User
 *
 * @property int $id
 * @property string $name
 * @property string $email
 * @property \Illuminate\Support\Carbon|null $email_verified_at
 * @property string $password
 * @property string|null $remember_token
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection|\Illuminate\Notifications\DatabaseNotification[] $notifications
 * @property-read int|null $notifications_count
 * @method static \Database\Factories\UserFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|User newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User query()
 * @method static \Illuminate\Database\Eloquent\Builder|User whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmailVerifiedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereUpdatedAt($value)
 */
	class User extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Word
 *
 * @property int $id
 * @property string $text
 * @property string $image
 * @property string|null $audio
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Collection[] $collections
 * @property-read int|null $collections_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Tag[] $tags
 * @property-read int|null $tags_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\WordCollection[] $wordCollections
 * @property-read int|null $word_collections_count
 * @method static \Database\Factories\WordFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|Word newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Word newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Word query()
 * @method static \Illuminate\Database\Eloquent\Builder|Word whereAudio($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Word whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Word whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Word whereImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Word whereText($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Word whereUpdatedAt($value)
 */
	class Word extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\WordCategory
 *
 * @property int $id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|WordCategory newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|WordCategory newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|WordCategory query()
 * @method static \Illuminate\Database\Eloquent\Builder|WordCategory whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|WordCategory whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|WordCategory whereUpdatedAt($value)
 */
	class WordCategory extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\WordCollection
 *
 * @property int $id
 * @property string $name
 * @property string $slug
 * @property string|null $image
 * @property int|null $user_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Word[] $words
 * @property-read int|null $words_count
 * @method static \Database\Factories\WordCollectionFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|WordCollection newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|WordCollection newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|WordCollection query()
 * @method static \Illuminate\Database\Eloquent\Builder|WordCollection whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|WordCollection whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|WordCollection whereImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|WordCollection whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|WordCollection whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder|WordCollection whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|WordCollection whereUserId($value)
 */
	class WordCollection extends \Eloquent {}
}

