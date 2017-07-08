<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Car
 *
 * @ORM\Table(name="car", uniqueConstraints={@ORM\UniqueConstraint(name="UNIQ_773DE69DD17F50A6", columns={"uuid"})}, indexes={@ORM\Index(name="FK_773DE69D4D42DB1D", columns={"pick_up_origin_id"})})
 * @ORM\Entity
 */
class Car
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="uuid", type="string", length=255, nullable=false)
     */
    private $uuid;

    /**
     * @var string
     *
     * @ORM\Column(name="registration", type="string", length=255, nullable=false)
     */
    private $registration;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="first_registration_at", type="datetime", nullable=true)
     */
    private $firstRegistrationAt;

    /**
     * @var integer
     *
     * @ORM\Column(name="status", type="integer", nullable=false)
     */
    private $status;

    /**
     * @var integer
     *
     * @ORM\Column(name="pick_up_status", type="integer", nullable=false)
     */
    private $pickUpStatus;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="pick_up_done_at", type="datetime", nullable=true)
     */
    private $pickUpDoneAt;

    /**
     * @var integer
     *
     * @ORM\Column(name="vehicle_type", type="integer", nullable=true)
     */
    private $vehicleType;

    /**
     * @var integer
     *
     * @ORM\Column(name="vehicle_energy_type", type="integer", nullable=true)
     */
    private $vehicleEnergyType;

    /**
     * @var string
     *
     * @ORM\Column(name="vehicle_maker", type="string", length=255, nullable=true)
     */
    private $vehicleMaker;

    /**
     * @var string
     *
     * @ORM\Column(name="vehicle_cnit", type="string", length=255, nullable=true)
     */
    private $vehicleCnit;

    /**
     * @var string
     *
     * @ORM\Column(name="vehicle_model", type="string", length=255, nullable=true)
     */
    private $vehicleModel;

    /**
     * @var string
     *
     * @ORM\Column(name="vehicle_model_variant", type="string", length=255, nullable=true)
     */
    private $vehicleModelVariant;

    /**
     * @var string
     *
     * @ORM\Column(name="vehicle_engine", type="string", length=255, nullable=true)
     */
    private $vehicleEngine;

    /**
     * @var boolean
     *
     * @ORM\Column(name="first_hand", type="boolean", nullable=false)
     */
    private $firstHand;

    /**
     * @var boolean
     *
     * @ORM\Column(name="duplicate_keys", type="boolean", nullable=false)
     */
    private $duplicateKeys;

    /**
     * @var string
     *
     * @ORM\Column(name="interior_color", type="string", length=255, nullable=true)
     */
    private $interiorColor;

    /**
     * @var string
     *
     * @ORM\Column(name="exterior_color", type="string", length=255, nullable=true)
     */
    private $exteriorColor;

    /**
     * @var integer
     *
     * @ORM\Column(name="passenger_capacity", type="integer", nullable=true)
     */
    private $passengerCapacity;

    /**
     * @var integer
     *
     * @ORM\Column(name="doors", type="integer", nullable=true)
     */
    private $doors;

    /**
     * @var string
     *
     * @ORM\Column(name="transmission", type="string", length=255, nullable=true)
     */
    private $transmission;

    /**
     * @var integer
     *
     * @ORM\Column(name="mileage_real", type="integer", nullable=true)
     */
    private $mileageReal;

    /**
     * @var integer
     *
     * @ORM\Column(name="mileage_estimate", type="integer", nullable=true)
     */
    private $mileageEstimate;

    /**
     * @var integer
     *
     * @ORM\Column(name="last_maintenance_mileage", type="integer", nullable=true)
     */
    private $lastMaintenanceMileage;

    /**
     * @var boolean
     *
     * @ORM\Column(name="chassis_jig", type="boolean", nullable=false)
     */
    private $chassisJig;

    /**
     * @var boolean
     *
     * @ORM\Column(name="repainted", type="boolean", nullable=false)
     */
    private $repainted;

    /**
     * @var array
     *
     * @ORM\Column(name="options", type="json_array", nullable=true)
     */
    private $options;

    /**
     * @var array
     *
     * @ORM\Column(name="pictures", type="json_array", nullable=true)
     */
    private $pictures;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="created_at", type="datetime", nullable=false)
     */
    private $createdAt;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="updated_at", type="datetime", nullable=true)
     */
    private $updatedAt;

    /**
     * @var string
     *
     * @ORM\Column(name="comments", type="text", nullable=true)
     */
    private $comments;

    /**
     * @var boolean
     *
     * @ORM\Column(name="enabled", type="boolean", nullable=false)
     */
    private $enabled;

    /**
     * @var \PickUpCenter
     *
     * @ORM\ManyToOne(targetEntity="PickUpCenter")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="pick_up_origin_id", referencedColumnName="id")
     * })
     */
    private $pickUpOrigin;



    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set uuid
     *
     * @param string $uuid
     *
     * @return self
     */
    public function setUuid($uuid)
    {
        $this->uuid = $uuid;

        return $this;
    }

    /**
     * Get uuid
     *
     * @return string
     */
    public function getUuid()
    {
        return $this->uuid;
    }

    /**
     * Set registration
     *
     * @param string $registration
     *
     * @return self
     */
    public function setRegistration($registration)
    {
        $this->registration = $registration;

        return $this;
    }

    /**
     * Get registration
     *
     * @return string
     */
    public function getRegistration()
    {
        return $this->registration;
    }

    /**
     * Set firstRegistrationAt
     *
     * @param \DateTime $firstRegistrationAt
     *
     * @return self
     */
    public function setFirstRegistrationAt($firstRegistrationAt)
    {
        $this->firstRegistrationAt = $firstRegistrationAt;

        return $this;
    }

    /**
     * Get firstRegistrationAt
     *
     * @return \DateTime
     */
    public function getFirstRegistrationAt()
    {
        return $this->firstRegistrationAt;
    }

    /**
     * Set status
     *
     * @param integer $status
     *
     * @return self
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return integer
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set pickUpStatus
     *
     * @param integer $pickUpStatus
     *
     * @return self
     */
    public function setPickUpStatus($pickUpStatus)
    {
        $this->pickUpStatus = $pickUpStatus;

        return $this;
    }

    /**
     * Get pickUpStatus
     *
     * @return integer
     */
    public function getPickUpStatus()
    {
        return $this->pickUpStatus;
    }

    /**
     * Set pickUpDoneAt
     *
     * @param \DateTime $pickUpDoneAt
     *
     * @return self
     */
    public function setPickUpDoneAt($pickUpDoneAt)
    {
        $this->pickUpDoneAt = $pickUpDoneAt;

        return $this;
    }

    /**
     * Get pickUpDoneAt
     *
     * @return \DateTime
     */
    public function getPickUpDoneAt()
    {
        return $this->pickUpDoneAt;
    }

    /**
     * Set vehicleType
     *
     * @param integer $vehicleType
     *
     * @return self
     */
    public function setVehicleType($vehicleType)
    {
        $this->vehicleType = $vehicleType;

        return $this;
    }

    /**
     * Get vehicleType
     *
     * @return integer
     */
    public function getVehicleType()
    {
        return $this->vehicleType;
    }

    /**
     * Set vehicleEnergyType
     *
     * @param integer $vehicleEnergyType
     *
     * @return self
     */
    public function setVehicleEnergyType($vehicleEnergyType)
    {
        $this->vehicleEnergyType = $vehicleEnergyType;

        return $this;
    }

    /**
     * Get vehicleEnergyType
     *
     * @return integer
     */
    public function getVehicleEnergyType()
    {
        return $this->vehicleEnergyType;
    }

    /**
     * Set vehicleMaker
     *
     * @param string $vehicleMaker
     *
     * @return self
     */
    public function setVehicleMaker($vehicleMaker)
    {
        $this->vehicleMaker = $vehicleMaker;

        return $this;
    }

    /**
     * Get vehicleMaker
     *
     * @return string
     */
    public function getVehicleMaker()
    {
        return $this->vehicleMaker;
    }

    /**
     * Set vehicleCnit
     *
     * @param string $vehicleCnit
     *
     * @return self
     */
    public function setVehicleCnit($vehicleCnit)
    {
        $this->vehicleCnit = $vehicleCnit;

        return $this;
    }

    /**
     * Get vehicleCnit
     *
     * @return string
     */
    public function getVehicleCnit()
    {
        return $this->vehicleCnit;
    }

    /**
     * Set vehicleModel
     *
     * @param string $vehicleModel
     *
     * @return self
     */
    public function setVehicleModel($vehicleModel)
    {
        $this->vehicleModel = $vehicleModel;

        return $this;
    }

    /**
     * Get vehicleModel
     *
     * @return string
     */
    public function getVehicleModel()
    {
        return $this->vehicleModel;
    }

    /**
     * Set vehicleModelVariant
     *
     * @param string $vehicleModelVariant
     *
     * @return self
     */
    public function setVehicleModelVariant($vehicleModelVariant)
    {
        $this->vehicleModelVariant = $vehicleModelVariant;

        return $this;
    }

    /**
     * Get vehicleModelVariant
     *
     * @return string
     */
    public function getVehicleModelVariant()
    {
        return $this->vehicleModelVariant;
    }

    /**
     * Set vehicleEngine
     *
     * @param string $vehicleEngine
     *
     * @return self
     */
    public function setVehicleEngine($vehicleEngine)
    {
        $this->vehicleEngine = $vehicleEngine;

        return $this;
    }

    /**
     * Get vehicleEngine
     *
     * @return string
     */
    public function getVehicleEngine()
    {
        return $this->vehicleEngine;
    }

    /**
     * Set firstHand
     *
     * @param boolean $firstHand
     *
     * @return self
     */
    public function setFirstHand($firstHand)
    {
        $this->firstHand = $firstHand;

        return $this;
    }

    /**
     * Get firstHand
     *
     * @return boolean
     */
    public function getFirstHand()
    {
        return $this->firstHand;
    }

    /**
     * Set duplicateKeys
     *
     * @param boolean $duplicateKeys
     *
     * @return self
     */
    public function setDuplicateKeys($duplicateKeys)
    {
        $this->duplicateKeys = $duplicateKeys;

        return $this;
    }

    /**
     * Get duplicateKeys
     *
     * @return boolean
     */
    public function getDuplicateKeys()
    {
        return $this->duplicateKeys;
    }

    /**
     * Set interiorColor
     *
     * @param string $interiorColor
     *
     * @return self
     */
    public function setInteriorColor($interiorColor)
    {
        $this->interiorColor = $interiorColor;

        return $this;
    }

    /**
     * Get interiorColor
     *
     * @return string
     */
    public function getInteriorColor()
    {
        return $this->interiorColor;
    }

    /**
     * Set exteriorColor
     *
     * @param string $exteriorColor
     *
     * @return self
     */
    public function setExteriorColor($exteriorColor)
    {
        $this->exteriorColor = $exteriorColor;

        return $this;
    }

    /**
     * Get exteriorColor
     *
     * @return string
     */
    public function getExteriorColor()
    {
        return $this->exteriorColor;
    }

    /**
     * Set passengerCapacity
     *
     * @param integer $passengerCapacity
     *
     * @return self
     */
    public function setPassengerCapacity($passengerCapacity)
    {
        $this->passengerCapacity = $passengerCapacity;

        return $this;
    }

    /**
     * Get passengerCapacity
     *
     * @return integer
     */
    public function getPassengerCapacity()
    {
        return $this->passengerCapacity;
    }

    /**
     * Set doors
     *
     * @param integer $doors
     *
     * @return self
     */
    public function setDoors($doors)
    {
        $this->doors = $doors;

        return $this;
    }

    /**
     * Get doors
     *
     * @return integer
     */
    public function getDoors()
    {
        return $this->doors;
    }

    /**
     * Set transmission
     *
     * @param string $transmission
     *
     * @return self
     */
    public function setTransmission($transmission)
    {
        $this->transmission = $transmission;

        return $this;
    }

    /**
     * Get transmission
     *
     * @return string
     */
    public function getTransmission()
    {
        return $this->transmission;
    }

    /**
     * Set mileageReal
     *
     * @param integer $mileageReal
     *
     * @return self
     */
    public function setMileageReal($mileageReal)
    {
        $this->mileageReal = $mileageReal;

        return $this;
    }

    /**
     * Get mileageReal
     *
     * @return integer
     */
    public function getMileageReal()
    {
        return $this->mileageReal;
    }

    /**
     * Set mileageEstimate
     *
     * @param integer $mileageEstimate
     *
     * @return Car
     */
    public function setMileageEstimate($mileageEstimate)
    {
        $this->mileageEstimate = $mileageEstimate;

        return $this;
    }

    /**
     * Get mileageEstimate
     *
     * @return integer
     */
    public function getMileageEstimate()
    {
        return $this->mileageEstimate;
    }

    /**
     * Set lastMaintenanceMileage
     *
     * @param integer $lastMaintenanceMileage
     *
     * @return self
     */
    public function setLastMaintenanceMileage($lastMaintenanceMileage)
    {
        $this->lastMaintenanceMileage = $lastMaintenanceMileage;

        return $this;
    }

    /**
     * Get lastMaintenanceMileage
     *
     * @return integer
     */
    public function getLastMaintenanceMileage()
    {
        return $this->lastMaintenanceMileage;
    }

    /**
     * Set chassisJig
     *
     * @param boolean $chassisJig
     *
     * @return self
     */
    public function setChassisJig($chassisJig)
    {
        $this->chassisJig = $chassisJig;

        return $this;
    }

    /**
     * Get chassisJig
     *
     * @return boolean
     */
    public function getChassisJig()
    {
        return $this->chassisJig;
    }

    /**
     * Set repainted
     *
     * @param boolean $repainted
     *
     * @return self
     */
    public function setRepainted($repainted)
    {
        $this->repainted = $repainted;

        return $this;
    }

    /**
     * Get repainted
     *
     * @return boolean
     */
    public function getRepainted()
    {
        return $this->repainted;
    }

    /**
     * Set options
     *
     * @param array $options
     *
     * @return self
     */
    public function setOptions($options)
    {
        $this->options = $options;

        return $this;
    }

    /**
     * Get options
     *
     * @return array
     */
    public function getOptions()
    {
        return $this->options;
    }

    /**
     * Set pictures
     *
     * @param array $pictures
     *
     * @return self
     */
    public function setPictures($pictures)
    {
        $this->pictures = $pictures;

        return $this;
    }

    /**
     * Get pictures
     *
     * @return array
     */
    public function getPictures()
    {
        return $this->pictures;
    }

    /**
     * Set createdAt
     *
     * @param \DateTime $createdAt
     *
     * @return self
     */
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    /**
     * Get createdAt
     *
     * @return \DateTime
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * Set updatedAt
     *
     * @param \DateTime $updatedAt
     *
     * @return self
     */
    public function setUpdatedAt($updatedAt)
    {
        $this->updatedAt = $updatedAt;

        return $this;
    }

    /**
     * Get updatedAt
     *
     * @return \DateTime
     */
    public function getUpdatedAt()
    {
        return $this->updatedAt;
    }

    /**
     * Set comments
     *
     * @param string $comments
     *
     * @return self
     */
    public function setComments($comments)
    {
        $this->comments = $comments;

        return $this;
    }

    /**
     * Get comments
     *
     * @return string
     */
    public function getComments()
    {
        return $this->comments;
    }

    /**
     * Set enabled
     *
     * @param boolean $enabled
     *
     * @return self
     */
    public function setEnabled($enabled)
    {
        $this->enabled = $enabled;

        return $this;
    }

    /**
     * Get enabled
     *
     * @return boolean
     */
    public function getEnabled()
    {
        return $this->enabled;
    }

    /**
     * Set pickUpOrigin
     *
     * @param PickUpCenter $pickUpOrigin
     *
     * @return self
     */
    public function setPickUpOrigin(\AppBundle\Entity\PickUpCenter $pickUpOrigin = null)
    {
        $this->pickUpOrigin = $pickUpOrigin;

        return $this;
    }

    /**
     * Get pickUpOrigin
     *
     * @return PickUpCenter
     */
    public function getPickUpOrigin()
    {
        return $this->pickUpOrigin;
    }
}
