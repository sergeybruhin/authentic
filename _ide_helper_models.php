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
 * App\Models\GameSession
 *
 * @property int $id
 * @property string $started_at
 * @property string $ended_at
 * @property int|null $profile_id
 * @property int $points
 * @property int $is_finished
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Profile|null $profile
 * @method static \Illuminate\Database\Eloquent\Builder|GameSession newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|GameSession newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|GameSession query()
 * @method static \Illuminate\Database\Eloquent\Builder|GameSession whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GameSession whereEndedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GameSession whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GameSession whereIsFinished($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GameSession wherePoints($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GameSession whereProfileId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GameSession whereStartedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GameSession whereUpdatedAt($value)
 */
	class GameSession extends \Eloquent {}
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
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\PhraseCollection[] $phraseCollections
 * @property-read int|null $phrase_collections_count
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
 * App\Models\PhraseCollection
 *
 * @property int $id
 * @property string $name
 * @property string $slug
 * @property string|null $image
 * @property int|null $user_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Phrase[] $phrases
 * @property-read int|null $phrases_count
 * @method static \Illuminate\Database\Eloquent\Builder|PhraseCollection newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PhraseCollection newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PhraseCollection query()
 * @method static \Illuminate\Database\Eloquent\Builder|PhraseCollection whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PhraseCollection whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PhraseCollection whereImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PhraseCollection whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PhraseCollection whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PhraseCollection whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PhraseCollection whereUserId($value)
 */
	class PhraseCollection extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Profile
 *
 * @property int $id
 * @property string $name
 * @property string $slug
 * @property int $score
 * @property int $user_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\User $user
 * @method static \Database\Factories\ProfileFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Profile newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Profile query()
 * @method static \Illuminate\Database\Eloquent\Builder|Profile whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile whereScore($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile whereUserId($value)
 */
	class Profile extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Session
 *
 * @property string $id
 * @property int|null $user_id
 * @property string|null $ip_address
 * @property string|null $user_agent
 * @property string $payload
 * @property \Illuminate\Support\Carbon $last_activity
 * @property-read \Carbon\Carbon $last_activity_at
 * @property-read array $unserialized_payload
 * @property-read \App\Models\User|null $user
 * @method static \Illuminate\Database\Eloquent\Builder|Session newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Session newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Session query()
 * @method static \Illuminate\Database\Eloquent\Builder|Session whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Session whereIpAddress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Session whereLastActivity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Session wherePayload($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Session whereUserAgent($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Session whereUserId($value)
 */
	class Session extends \Eloquent {}
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
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Profile[] $profiles
 * @property-read int|null $profiles_count
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

namespace App\Models{
/**
 * App\Models\WordCollectionPivot
 *
 * @property int $id
 * @property int $word_id
 * @property int $word_collection_id
 * @property int $sort_order
 * @property string|null $created_at
 * @property string|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|WordCollectionPivot newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|WordCollectionPivot newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|WordCollectionPivot ordered(string $direction = 'asc')
 * @method static \Illuminate\Database\Eloquent\Builder|WordCollectionPivot query()
 * @method static \Illuminate\Database\Eloquent\Builder|WordCollectionPivot whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|WordCollectionPivot whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|WordCollectionPivot whereSortOrder($value)
 * @method static \Illuminate\Database\Eloquent\Builder|WordCollectionPivot whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|WordCollectionPivot whereWordCollectionId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|WordCollectionPivot whereWordId($value)
 */
	class WordCollectionPivot extends \Eloquent implements \Spatie\EloquentSortable\Sortable {}
}

